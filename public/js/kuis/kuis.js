history.pushState(null, null, window.location.href);
history.back();
window.onpopstate = () => history.forward();

let url = window.location.href;
let base_path = window.location.origin;
let urlSplitted = url.split("/");

let jenis = urlSplitted[urlSplitted.length - 1];
let soal = 1;
setNavCurrentNumber(soal)
let userAnswer = {};

if (jenis == 1) {
    userAnswer["soal1_1"] = [];
}
if (jenis == 2) {
    userAnswer["soal1_1"] = "x";
    userAnswer["soal2_1"] = "x";
    userAnswer["soal3_1"] = "x";
    userAnswer["soal4_1"] = "x";
    userAnswer["soal5_1"] = "x";

    userAnswer["soal6_1"] = "1";
    userAnswer["soal6_2"] = "x";
    userAnswer["soal6_16"] = "1";

    userAnswer["soal7_1"] = "1";
    userAnswer["soal7_2"] = "x";
    userAnswer["soal7_16"] = "1";

    userAnswer["soal8_1"] = "1";
    userAnswer["soal8_2"] = "x";
    userAnswer["soal8_16"] = "1";
}
if (jenis == 3) {
    userAnswer["soal3_7"] = "1";
    userAnswer["soal3_8"] = "x";
    userAnswer["soal3_22"] = "1";
    userAnswer["soal4_7"] = "1";
    userAnswer["soal4_8"] = "x";
    userAnswer["soal4_22"] = "1";
}
startTimer();

getSoal(soal, setSoal);
$("#btn-nav-prev").css("opacity", 0);
$("#btn-nav-prev").css("cursor", "default");

$(".nav-soal-item").each(function (i) {
    $(this).on("click", function () {
        soal = $(this).val();
        getSoal(soal, setSoal);
        setNavCurrentNumber(soal);
    });
});
$("#btn-nav-prev").on("click", () => {
    if (soal > 1) {
        soal--;
        getSoal(soal, setSoal);
    }
});
$("#btn-nav-next").on("click", () => {
    if (soal < jumlahSoal) {
        soal++;
        getSoal(soal, setSoal);
    }
});

$("#keluarBtn").on("click", () => {
    Swal.fire({
        title: "Anda yakin ingin keluar?",
        icon: "warning",
        text: "Pengerjaan ini akan tetap dinilai meski belum ada yang dijawab",
        showCancelButton: true,
        confirmButtonText: "Iya, saya keluar",
        cancelButtonText: `Batal`,
        cancelButtonColor: "#d33",
    }).then((result) => {
        if (result.isConfirmed) {
            submitAnswer(userAnswer);
        }
    });
});
$("#kumpulBtn").on("click", () => {
    Swal.fire({
        title: "Anda yakin ingin mengumpulkan pengerjaan anda?",
        text: "Masih ada soal yang belum terjawab.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Iya, saya kumpul",
        cancelButtonText: `Batal`,
        cancelButtonColor: "#d33",
    }).then((result) => {
        if (result.isConfirmed) {
            submitAnswer(userAnswer);
        }
    });
});

$("#selesaiBtn").on("click", () => {
    Swal.fire({
        title: "Anda yakin ingin mengumpulkan pengerjaan anda?",
        text: "Hasil pengerjaan akan masuk ke dalam penilaian",
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Iya, saya kumpul",
        cancelButtonText: `Batal`,
        cancelButtonColor: "#d33",
    }).then((result) => {
        if (result.isConfirmed) {
            submitAnswer(userAnswer);
        }
    });
});

// ---- FUNCTION -----
function getSoal(soal, set) {
    $.get(
        "/get-soal?jenis=" + jenis + "&no=" + soal + "&set=" + set,
        function (data) {
            $("#soal-content").html(data);
            $("#noSoal").html(soal);
            MathJax.typeset();

            if (jenis > 1) {
                deleteScript();
                loadScript(jenis);
            }

            addListenerToCheckBox();
            addListenerToMathfield();
            addListenerToPilgan();
            setAnswerToField();

            document.createElement("script");
            if (soal == 1) {
                $("#btn-nav-prev").css("opacity", 0);
                $("#btn-nav-prev").css("cursor", "default");
                $("#btn-nav-next").css("opacity", 1);
                $("#btn-nav-next").css("cursor", "pointer");
            } else if (soal == jumlahSoal) {
                $("#btn-nav-prev").css("opacity", 1);
                $("#btn-nav-next").css("opacity", 0);
                $("#btn-nav-prev").css("cursor", "default");
                $("#btn-nav-next").css("cursor", "default");
            } else {
                $("#btn-nav-prev").css("opacity", 1);
                $("#btn-nav-next").css("opacity", 1);
                $("#btn-nav-prev").css("cursor", "pointer");
                $("#btn-nav-next").css("cursor", "pointer");
            }
        }
    );
}

// Load all Script
function loadScript(jenis, soal = "") {
    createScriptBody(
        base_path + "/js/kuis/kuis" + jenis + ".js",
        "kuis-event",
        function () {}
    );
    // createScriptBody(base_path+'/js/kuis/'+jenis+'-'+soal+'.js','soalKuis',function(){})
}
// Delete script
function deleteScript() {
    let id = ["kuis-event"];
    $.each(id, function (i, val) {
        $("#" + val).remove();
    });
}

function createScriptBody(src, id = "", callback) {
    var script = document.createElement("script");
    script.src = src;
    script.onload = callback;
    script.setAttribute("id", id);
    document.body.appendChild(script);
}

function startTimer() {
    const timerElement = $("#waktu");

    setInterval(() => {
        const hours = Math.floor(timer / 3600);
        const minutes = Math.floor((timer % 3600) / 60);
        const seconds = timer % 60;

        const formattedTime = `
            ${String(hours).padStart(2, "0")}:${String(minutes).padStart(
            2,
            "0"
        )}:${String(seconds).padStart(2, "0")}
        `;
        timerElement.text(formattedTime);

        if (timer > 0) {
            timer--;
            if (timer == 0) {
                // submitAnswer(userAnswer)
            }
        }
    }, 1000);
}

function addListenerToCheckBox() {
    let noSoal = $('input[type="checkbox"]').attr("name");
    $('input[type="checkbox"]').on("change", function () {
        let isChecked = $(this).is(":checked");
        if (isChecked) {
            userAnswer[noSoal].push(this.value);
        } else {
            let index = userAnswer[noSoal].indexOf(this.value);
            userAnswer[noSoal].splice(index, 1);
        }
        checkAllFieldAnswered();
    });
}

function addListenerToPilgan() {
    $('input[type="radio"]').on("click", (e) => {
        let soal = $(e.target).attr("name");
        let jawaban = $(e.target).attr("id").split(soal)[1];
        userAnswer[soal] = jawaban;
        checkAllFieldAnswered();
    });
}

function setNavCurrentNumber(no){
    $(".nav-soal-item").each(function (i) {
        if(soal == $(this).val()){
            $(this).addClass('current')
        }else{
            $(this).removeClass('current')
        }
    });
}

function setAnswerToField() {
    let noSoal = $('input[type="checkbox"]').attr("name");
    if ($('input[type="checkbox"]').length != 0) {
        if (userAnswer[noSoal].length != 0) {
            userAnswer[noSoal].forEach((item) => {
                $("#check-" + item).prop("checked", true);
            });
        }
    }

    let keys = Object.keys(userAnswer);
    for (let i = 0; i < keys.length; i++) {
        $("#" + keys[i]).val(userAnswer[keys[i]]);
    }
}

function addListenerToMathfield() {
    $(".field-answer").on("change", function () {
        let value = $(this).val();
        let id = $(this).attr("id");
        userAnswer[id] = value;
        checkAllFieldAnswered();
    });
}

function displayBtn(button) {
    if (button == "selesai") {
        $("#selesaiBtn").removeClass("d-none");
        $("#kumpulBtn").addClass("d-none");
        $("#keluarBtn").addClass("d-none");
    } else if ((button = "kumpul")) {
        $("#selesaiBtn").addClass("d-none");
        $("#kumpulBtn").removeClass("d-none");
        $("#keluarBtn").addClass("d-none");
    }
}

function checkAllFieldAnswered() {
    let answeredField = 0;
    $(".field-answer").each(function () {
        let id = $(this).attr("id");
        if (typeof userAnswer[id] !== "undefined" && userAnswer[id] !== "") {
            answeredField++;
        }
    });

    if ($('input[type="checkbox"]').length != 0) {
        let id = $('input[type="checkbox"]').attr("name");
        if (userAnswer[id].length != 0) {
            $(".nav-soal-item[value='" + soal + "']").addClass("answered");
            displayBtn("kumpul");
        } else {
            $(".nav-soal-item[value='" + soal + "']").removeClass("answered");
        }
    } else if ($('input[type="radio"').length != 0) {
        let id = $('input[type="radio"]').attr("name");
        if (userAnswer[id].length != 0) {
            $(".nav-soal-item[value='" + soal + "']").addClass("answered");
            displayBtn("kumpul");
        }
    } else {
        if (answeredField == $(".field-answer").length) {
            $(".nav-soal-item[value='" + soal + "']").addClass("answered");
            $(".nav-soal-item[value='" + soal + "']").removeClass(
                "half-answered"
            );
        } else if (answeredField > 0) {
            $(".nav-soal-item[value='" + soal + "']").addClass("half-answered");
            $(".nav-soal-item[value='" + soal + "']").removeClass("answered");
            displayBtn("kumpul");
        } else {
            $(".nav-soal-item[value='" + soal + "']").removeClass("answered");
            $(".nav-soal-item[value='" + soal + "']").removeClass(
                "half-answered"
            );
        }
    }
    checkAllSoalAnswered();
}

function checkAllSoalAnswered() {
    let totalSoal = $(".nav-soal-item").length;
    let totalSoalAnswered = $(".answered").length;
    if (totalSoal == totalSoalAnswered) {
        displayBtn("selesai");
    } else {
        displayBtn("kumpul");
    }
}

function submitAnswer(userAnswer) {
    // console.log(userAnswer.length);
    if (jenis == 1 && userAnswer["soal1_1"].length != 0) {
        userAnswer["soal1_1"] = userAnswer["soal1_1"].sort().join();
    }
    if (userAnswer.length == undefined) {
        userAnswer['soal1_1'] = '1' 
    }
    $.ajax({
        type: "post",
        url: "/kuis/submit",
        data: {
            userAnswer: userAnswer,
            jenisKuis: jenis,
            setSoal: setSoal,
            _token: token,
            waktuPengerjaan: timer,
        },
        success: function (response) {
            if (response.status == "success") {
                window.location.href = "/hasil-kuis/" + response.idNilai;
            }
        },
        error: function (reject) {
            console.log(reject);
        },
    });
}
