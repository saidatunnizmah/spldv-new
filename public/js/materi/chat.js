let chatContainer = document.getElementById('chat-container');
let chatInput = document.getElementById('chatInput');
let btnSend = document.getElementById('btn-kirim');


// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;
$(document).ready(function () {
    
    getDataChat(kelas,bab,page)

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

    var channel = pusher.subscribe('private-chat.' + bab + '-'+ page + kelas);
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
    
    btnSend.addEventListener('click',()=>{
        if (chatInput.value != "") {
            $.ajax({
                type: "post",
                url: "/send-chat",
                data: {
                    _token : token,
                    pesan : chatInput.value,
                    bab : bab,
                    page : page,
                    kelas : kelas
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
    })
});


// -------- FUNCTION ----------------
function getDataChat(kelas,bab,page) {
    $.get("/get-chat?k="+kelas+'&b='+bab+'&p='+page, function (response) {
            console.log(response);
            if (response.data.length > 0) {
                for (let i = 0; i < response.data.length; i++) {
                    let chat = response.data[i]

                    if (chat.user_id == id) {
                        let element = `
                        <div class="chat-sent-container">
                            <div class="chat-message-sent">
                                <p class="message m-0">
                                    ${chat.pesan}
                                </p>
                                <small class="sent-time">${chat.waktu_terkirim}</small>
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
                                <small class="chat-sender-name">${chat.senderName}</small>
                                <div class="chat-message-receive">
                                    <p class="message m-0">
                                        ${chat.pesan}
                                    </p>
                                    <small class="sent-time">${chat.waktu_terkirim}</small>
                                </div>
                            </div>
                        </div>
                        `
                        $('#chat-container').append(element);
                    }  
                }
                $("#chat-container").stop().animate({ scrollTop: $('#chat-container').get(0).scrollHeight }, 1000);
            }
        },
    );
}