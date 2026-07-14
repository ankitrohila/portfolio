<!-- ================= FOOTER ================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="row">
            
            <!-- LEFT -->
            <div class="col-lg-5">
                <div class="footer-item">
                    <h2>Let’s work together</h2>
                    <ul class="short-link">
                        <li>
                            <a href="mailto:rohilla77@gmail.com">
                                <i class="fas fa-envelope"></i> Email Me
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/8950205038">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-6 offset-lg-1">
                <div class="footer-items">

                    <!-- SERVICES -->
                    <div class="footer-item">
                        <h4 class="widget-title">What I Do?</h4>
                        <ul class="project-list">
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Mobile App Design</a></li>
                            <li><a href="#">Brand Identity</a></li>
                            <li><a href="#">Graphics Design</a></li>
                            <li><a href="#">Software Migration</a></li>
                        </ul>
                    </div>

                    <!-- ADDRESS + SOCIAL -->
                    <div class="footer-item">
                        <h5>Sonipat, Haryana, India</h5>
                        <div class="bottom">
                            <h4>Connect with me</h4>
                            <ul class="social-list">
                                <li><a href="#">FB.</a></li>
                                <li><a href="#">IN.</a></li>
                                <li><a href="#">TW.</a></li>
                                <li><a href="#">BE.</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- BOTTOM -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <p>Copyright © 2024 Ankit. All Rights Reserved</p>
                </div>
                <div class="col-lg-6 text-end">
                    <a id="scrollUp" href="#">
                        Back To Top <i class="fas fa-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</footer>


<!-- ================= FLOATING BUTTONS ================= -->
<div id="theme-toggle">🌙</div>
<div id="chatbot-toggle">💬</div>

<!-- ================= CHATBOX ================= -->
<div id="chatbot-box">
    <div id="chat-header">AI Agent</div>

    <div id="chatbox"></div>

    <div id="chat-input-area">
        <input type="text" id="userInput" placeholder="Type your message..." />
        <button id="sendBtn">➤</button>
    </div>
</div>


<!-- ================= CSS ================= -->
<style>
/* Toggle buttons */
#chatbot-toggle,
#theme-toggle {
    position: fixed;
    right: 20px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 99999;
}

/* Chat button */
#chatbot-toggle {
    bottom: 20px;
    background: #5544FF;
    color: #fff;
    padding: 14px;
}

/* Theme button */
#theme-toggle {
    bottom: 80px;
    background: #000;
    color: #fff;
    padding: 10px;
}

/* Chatbox */
#chatbot-box {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    width: 320px;
    height: 420px;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    z-index: 999999999;
}

/* Header */
#chat-header {
    background: #5544FF;
    color: #fff;
    padding: 10px;
}

/* Chat messages */
#chatbox {
    height: 260px;
    overflow-y: auto;
    padding: 10px;
    font-size: 13px;
}

/* Input */
#chat-input-area {
    display: flex;
    padding: 10px;
}

#chat-input-area input {
    flex: 1;
    padding: 8px;
}

#chat-input-area button {
    background: #5544FF;
    color: #fff;
    border: none;
    padding: 8px 10px;
}

/* Messages */
.user-msg { text-align: right; }
.bot-msg { text-align: left; }

.bubble {
    padding: 8px;
    border-radius: 10px;
    display: inline-block;
    max-width: 75%;
}

.user-msg .bubble {
    background: #5544FF;
    color: #fff;
}

.bot-msg .bubble {
    background: #eee;
}

/* FIX: remove blocking overlays */
.overlay-screen {
    display: none !important;
}
</style>


<!-- ================= JS FILES ================= -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/jquery.waypoints.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/validnavs.js"></script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/typed.js"></script>
<script src="assets/js/main.js"></script>


<!-- ================= WORKING JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", function(){

    const toggle = document.getElementById("chatbot-toggle");
    const box = document.getElementById("chatbot-box");
    const input = document.getElementById("userInput");
    const sendBtn = document.getElementById("sendBtn");
    const themeToggle = document.getElementById("theme-toggle");

    /* ===== SESSION ===== */
    if (!window.sessionId) {
        window.sessionId = localStorage.getItem("chat_session");
        if (!window.sessionId) {
            window.sessionId = "sess_" + Math.random().toString(36).substr(2, 9);
            localStorage.setItem("chat_session", window.sessionId);
        }
    }

    /* ===== CHAT TOGGLE ===== */
    document.addEventListener("click", function(e){

    // CHATBOT TOGGLE CLICK
    if(e.target.closest("#chatbot-toggle")){

        const box = document.getElementById("chatbot-box");

        if(box){
            box.style.display =
                (box.style.display === "block") ? "none" : "block";
        }

    }

});

    /* ===== DARK MODE ===== */
    if(themeToggle){
    themeToggle.onclick = function(){

        document.body.classList.toggle("bg-dark");

        if(document.body.classList.contains("bg-dark")){
            document.body.style.backgroundImage = "url(assets/img/shape/3.jpg)";
        } else {
            document.body.style.backgroundImage = "url(assets/img/shape/2.jpg)";
        }

    };
}

    /* ===== SEND MESSAGE ===== */
    function sendMessage(){

        let msg = input.value.trim();
        if(msg === "") return;

        const chatbox = document.getElementById("chatbox");

        chatbox.innerHTML += `
            <div class="user-msg">
                <div class="bubble">${msg}</div>
            </div>
        `;

        chatbox.innerHTML += `
            <div class="bot-msg" id="loader">
                <div class="bubble">Typing...</div>
            </div>
        `;

        fetch("chatbot/api.php", {
            method: "POST",
            headers: {"Content-Type":"application/json"},
            body: JSON.stringify({
                message: msg,
                session_id: window.sessionId
            })
        })
        .then(res => res.json())
        .then(data => {

            document.getElementById("loader")?.remove();

            chatbox.innerHTML += `
                <div class="bot-msg">
                    <div class="bubble">${data.reply}</div>
                </div>
            `;

            chatbox.scrollTop = chatbox.scrollHeight;
        })
        .catch(()=>{
            chatbox.innerHTML += `
                <div class="bot-msg">
                    <div class="bubble">Server error</div>
                </div>
            `;
        });

        input.value = "";
    }

    /* ===== BUTTON ===== */
    if(sendBtn){
        sendBtn.onclick = sendMessage;
    }

    /* ===== ENTER KEY ===== */
    if(input){
        input.addEventListener("keypress", function(e){
            if(e.key === "Enter"){
                sendMessage();
            }
        });
    }

});
</script>

</body>
</html>