let daftarDiskusi = document.getElementById('daftar-diskusi');
let btnBuatDiskusi = document.getElementById('btnBuatDiskusi')
let formBuatDiskusi = document.getElementById('formBuatDiskusi');
let inputBuatDiskusi = document.getElementById('inputBuatDiskusi');
let btnInputBuatDiskusi = document.getElementById('btnInputBuatDiskusi')
let btnBatalBuatDiskusi = document.getElementById('btnBatalBuatDiskusi')
let btnDiskusi = document.querySelectorAll('.diskusi-item');
let btnBackDaftarDiskusi = document.getElementById('btnBackDaftarDiskusi');

let chat = document.getElementById('chat');
let chatContainer = document.getElementById('chat-container');
let diskusiIdInput = document.getElementById('diskusiIdInput')
let chatInput = document.getElementById('chatInput');
let btnSend = document.getElementById('btn-kirim');

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;
$(document).ready(function () {
    
    // getDataChat(kelas,bab,page)
    btnBuatDiskusi.addEventListener('click', toggleFormBuatDiskusi);
    btnBatalBuatDiskusi.addEventListener('click', toggleFormBuatDiskusi);
    btnInputBuatDiskusi.addEventListener('click', createDiskusi);
    btnBackDaftarDiskusi.addEventListener('click', closeDiskusi);

    btnDiskusi.forEach(item => {
        item.addEventListener('click', openDiskusi)
    })
    
    btnSend.addEventListener('click',sendChat)
});


// -------- FUNCTION ----------------
function toggleFormBuatDiskusi() {
    inputBuatDiskusi.value = '';
    btnBuatDiskusi.classList.toggle('d-none');
    formBuatDiskusi.classList.toggle('d-none');
}
function createDiskusi(){
    let judulDiskusi = inputBuatDiskusi.value;
    if (judulDiskusi != '') {
        let dataDiskusi = new FormData();
        dataDiskusi.append('judulDiskusi', judulDiskusi);
        dataDiskusi.append('bab', bab);
        dataDiskusi.append('page', page)
        dataDiskusi.append('_token', $('meta[name="csrf-token"]').attr('content'))

        $.ajax({
            type: "POST",
            url: '/diskusi',
            data: dataDiskusi,
            processData: false,
            contentType: false,
            success: function (response){
                let element = `
                    <div class="alert alert-${response.alert} alert-dismissible fade show" role="alert">
                        ${response.msg}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `
                $('#daftar-diskusi').prepend(element);
                toggleFormBuatDiskusi()
                getAllDataDiskusi()
            },
            error: function(err){
                console.log('error:'+ err);
            }
        });
    }
}
function getAllDataDiskusi() {
    $.get(`/diskusi/${bab}/${page}`,
        function (response) {
            $('#diskusi-container').html('')
            response.forEach(item => {
                let element = `
                    <button class="diskusi-item" data-diskusi="${item.id}">
                        <div class="diskusi-title">
                            <p class="text-start m-0">
                                ${item.judul}
                            </p>
                            <small class="fw-normal">Dibuat oleh: ${item.pembuat}</small>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </button>
                `
                $('#diskusi-container').append(element)
            });
        },
    );
}
function openDiskusi() {
    let diskusiId = this.getAttribute('data-diskusi');
    
    getChatsByDiskusi(diskusiId)
    diskusiIdInput.value = diskusiId
    daftarDiskusi.classList.add('d-none')
    chat.classList.remove('d-none')
}
function closeDiskusi() {
    daftarDiskusi.classList.remove('d-none')
    chat.classList.add('d-none')
}
function getChatsByDiskusi(diskusiId) {
    $.get(`/get-chat/${diskusiId}`, function (response) {
        $('#judulDiskusi').html(response.diskusi.judul)
        $('#pembuatDiskusi').html(response.diskusi.pembuat)
        $('#chat-container').html('')

        var pusher = new Pusher('fc84365476335bebe781', {
            cluster: 'ap1',
            authEndpoint: '/pusher/auth',
            encrypted: true,
            auth: {
                headers: {
                  'X-CSRF-TOKEN': token
                }
            }
        });

        var channel = pusher.subscribe('private-chat.diskusi-'+ diskusiId);
        channel.bind('ChatSend', function(data) {
            if (data.senderId != id) {
                let base_path = window.location.origin;
                let element = `
                <div class="chat-receive-container">
                    <img src="${base_path}/img/anon-user.jpg" alt="" class="chat-sender-img">
                    <div class="chat">
                        <small class="chat-sender-name">${data.senderName}</small>
                        <div class="chat-message-receive">
                            <p class="message m-0">
                                ${data.pesan}
                            </p>
                            <small class="sent-time">${data.waktuTerkirim}</small>
                        </div>
                    </div>
                </div>
                `
                $('#chat-container').append(element);
                $("#chat-container").stop().animate({ scrollTop: $('#chat-container').get(0).scrollHeight }, 1000);
            }
        });

        response.chats.forEach(item=>{
            if (item.user_id == id) {
                let element = `
                <div class="chat-sent-container">
                    <div class="chat-message-sent">
                        <p class="message m-0">
                            ${item.pesan}
                        </p>
                        <small class="sent-time">${item.waktu_terkirim}</small>
                    </div>
                </div>
                `
                $('#chat-container').append(element)
            }else{
                let base_path = window.location.origin;
                let element = `
                <div class="chat-receive-container">
                    <img src="${base_path}/img/anon-user.jpg" alt="" class="chat-sender-img">
                    <div class="chat">
                        <small class="chat-sender-name">${item.senderName}</small>
                        <div class="chat-message-receive">
                            <p class="message m-0">
                                ${item.pesan}
                            </p>
                            <small class="sent-time">${item.waktu_terkirim}</small>
                        </div>
                    </div>
                </div>
                `
                $('#chat-container').append(element);
            }
            $("#chat-container").stop().animate({ scrollTop: $('#chat-container').get(0).scrollHeight }, 1000);
        })
    });
}
function sendChat() {
    if (chatInput.value != "") {
        $.ajax({
            type: "post",
            url: "/send-chat",
            data: {
                _token : token,
                diskusiId : diskusiIdInput.value,
                pesan : chatInput.value,
                bab : bab,
                page : page,
            },
            success: function (response) {
                console.log(response);
                let time = new Date();
                let waktuTerkirim = time.getHours() + '.' + time.getMinutes()
                let element = `
                <div class="chat-sent-container">
                    <div class="chat-message-sent">
                        <p class="message m-0">
                            ${response.chat_content}
                        </p>
                        <small class="sent-time">${waktuTerkirim}</small>
                    </div>
                </div>
                `
                $('#chat-container').append(element)
                $("#chat-container").stop().animate({ scrollTop: $('#chat-container').get(0).scrollHeight }, 1000);
                chatInput.value= ""
            }
        });
    }
}   