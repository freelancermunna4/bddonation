<?php 
require_once 'common/header.php';
?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

    <?php require_once 'common/sidebar.php';?>

            <!-- Right Content Column  -->
            <div class="right_column">
                <div class="page_content_title">
                    <h4>Contact US</h4>
                </div>
                <?php
              
                    if(isset($_POST['submit'])){
                        if(!empty($_POST['uname'])&&!empty($_POST['number'])&&!empty($_POST['email'])&&!empty($_POST['address'])&&!empty($_POST['message'])){
                            $name=$db->EscapeString($_POST['uname']);
                            $number=$db->EscapeString($_POST['number']);
                            $email=$db->EscapeString($_POST['email']);
                            $address=$db->EscapeString($_POST['address']);
                            $message=$db->EscapeString($_POST['message']);
                            $tim=time();
                            $queary=$db->Query("INSERT INTO `contact`(`name`, `phon`, `email`, `adress`, `msg`, `time`) 
                            VALUES ('$name','$number','$email','$address','$message',$tim)");

                            if($queary){
                                echo '<p style="color: green;text-align: center;">Successfully Submit. Send you Email Letter..</p>';
                            }else{
                                echo '<p style="color: green;text-align: center;">Something Error!</p>';
                            }


                            
                        }else{
                            echo '<p style="color: green;text-align: center;">Empty fild</p>';
                        }

                    }
                ?>

                <form class="grid grid-cols-12 gap-5 p-2" method="post">

                    <div class="col-span-12 lg:col-span-6">
                        <label for="name">Your Name</label>
                        <input required class="input" name="uname" id="name" type="text" placeholder="Your Name" />
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <label for="number">Phone Number</label>
                        <input required class="input" name="number" id="number" type="text" placeholder="Number" />
                    </div>

                    <div class="col-span-12 lg:col-span-6">
                        <label for="email">Your Email</label>
                        <input required class="input" name="email" id="email" type="email" placeholder="Your Name" />
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <label for="address">Your Address</label>
                        <input required class="input" name="address" id="address" type="text" placeholder="Your Address" />
                    </div>
                    <div class="col-span-12 flex flex-col">
                        <label for="message">Message</label>
                        <textarea required  name="message" class="input min-h-[180px]" id="message" placeholder="Your message..."></textarea>
                    </div>

                    <div class="col-span-6">
                        <button type="submit" name="submit" class="btn">Send</button>
                    </div>

                </form>

               

            </div>
            <!-- Right Content Column  -->

        </div>
    </main>
    <?php require_once 'common/footer.php';?>