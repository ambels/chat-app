<?php $title = "Chat app" ?>

<?php ob_start() ?>

<section class="container">
    <div class="row">
        <div class="col-6 mr-auto ml-auto mt-5">

            <form name="frmChat" id="chat-form">
                <div id="chat-box"></div>
                <input type="text" name="chat-user" id="chat-user" placeholder="Prénom" class="chat-input" required />
                <input type="text" name="chat-message" id="chat-message" placeholder="Votre message"
                class="chat-input chat-message" 
                required />
                <input type="submit" id="btnSend" name="send-chat-message" value="Envoyer">
            </form>
        </div>
    </div>
</section>

<?php $content = ob_get_clean() ?>

<?php require 'base_layout.php' ?>