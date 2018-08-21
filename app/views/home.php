<?php if( !isset($_SESSION['id'])): ?>
    <?php echo  header("location:login");?>
<?php else:?>
    <div class="container mt-4">
        <div class="row justify-content-center mb-3">
            <div class="col-12 text-center header">
                <h2>SECRET CHAT</h2>
            </div>
        </div>
        <div class="chat-mess"></div>
        <div class="input_area">
            <input id="input_message" name="message" type="text" placeholder="Текст сообщения">
            <button id="btn" class="btn btn-primary" type="submit">
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            </button>
        </div>
</div>
<?php endif;?>