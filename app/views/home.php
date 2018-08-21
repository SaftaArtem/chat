<?php
session_start();
if( !isset($_SESSION['id'])): ?>
    <?php echo  header("location:intropage");?>
<?php else:?>
    <div class="container-fluid chat-container">
        <div class="row h-100">
            <div class="col-3 border-chat-lightgray px-0" id="sidebar">
                <div id="sidebar-content" class="w-100 h-100">
                    <div class="input-group p-0 d-xs-none" id="search-group">
                        <input type="text" class="form-control border-0" placeholder="Search..." id="search">
                        <span class="input-group-addon">
                        <button class="btn border-0 bg-white text-primary hover-color-darkblue" type="button">
                            <i class="fa fa-search fa-fw"></i>
                        </button>
                    </span>
                    </div>
                    <div class="sidebar-scroll" id="list-group">
                        <ul class="list-group w-100" id="friend-list">
                            <?php foreach ($data as $name):?>
                                <li class="list-group-item p-1 active hover-bg-lightgray">
                                    <img src="//placehold.it/50x50" class="rounded-circle">
                                    <span class="d-xs-none username"><?= $name ?></span>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col d-flex p-0">
                <div class="card">
                    <div class="card-header bg-darkblue text-white py-1 px-2" style="flex: 1 1">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="col-1 p-1">
                                <button id="main_btn" class="btn text-white bg-darkblue p-0 hover-color-lightgray">
                                    <i class="fas fa-bars fa-2x"></i>
                                </button>
                            </div>
                            <div class="col">
                                <div class="my-0">
                                    <b>StanIslove</b>
                                </div>
                                <div class="my-0">
                                    <small>last seen Feb 18 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-lightgrey d-flex flex-column p-0" style="flex: 9 1">
                        <div class="container-fluid message-scroll chat-mess" style="flex: 1 1">

                        </div>
                        <div class="input-group">
                            <input id="input_message" type="text" class="form-control border-0">
                            <span class="input-group-addon">
                            <button class="btn border-0 bg-white text-primary hover-color-darkblue" type="button" id="btn">
                                <i class="fab fa-telegram-plane fa-2x"></i>
                            </button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->

<?php endif;?>