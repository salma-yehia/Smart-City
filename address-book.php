<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/problem.css">
    <link rel="stylesheet" href="css/addressbook.css">
    <script src="js/jquery.min.js"></script> 
    <title>Address-book</title>
</head>
<?php include 'mistake.php'; ?>  
        <section class="address-section">
            <ul class="breadcrumb">
                <li>Application</li>
                <li class="include">Contact</li>
            </ul>
            <h1>Address Book</h1>
            <hr>
            <!-- div of address book -->
            <main>
                <section class="address-container">
                    <form action="">
                        <label for="search">
                            <i class="fas fa-search"></i>
                        </label>
                        <input type="search" name="search" id="search" placeholder="search contact">
                    </form><!-- div for search -->
                    <button class="add"><i class="fa fa-user-plus"></i></button>

                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <i class="fa fa-user"></i>
                                    Name
                                </th>
                                <th>
                                    <i class="fas fa-phone-alt"></i>
                                    Phone
                                </th>
                                <th>
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </th>
                                <th>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Address
                                </th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-table"></tbody>
                    </table>
                </section><!-- address-container -->
        
                <div class="overlay">
                    <div class="add-new-contact">
                        <div class="closed">
                            <i class="fas fa-times"></i>
                        </div><!-- closed btn -->
                        <i class="fa fa-user-plus" id="user-icon"></i>
                        <span>Add New Contact</span>
                        <form action="">
                            <input type="text" id="contact-form-name" placeholder="Full Name">
                            <input type="text" id="contact-form-phone" placeholder="Phone Number">
                            <input type="email" id="contact-form-email" placeholder="Email Address">
                            <input type="text" id="contact-form-address" placeholder="Home Address">
                        </form><!-- contact-form -->
                        <button class="save">
                            <i class="fas fa-save"></i>
                            Save
                        </button><!-- save btn-->
                    </div><!-- add-new-contact -->
                </div><!-- overlay -->
                
                <div class="edit-form">
                    <div class="edit-contact">
                        <div class="closed-edit">
                            <i class="fas fa-times"></i>
                        </div><!-- closed btn -->
                        <i class="fa fa-user-edit" id="user-icon"></i>
                        <span>Edit your Contact</span>
                        <form action="">
                            <input type="text" id="edit-form-name" placeholder="Full Name">
                            <input type="text" id="edit-form-phone" placeholder="Phone Number">
                            <input type="email" id="edit-form-email" placeholder="Email Address">
                            <input type="text" id="edit-form-address" placeholder="Home Address">
                        </form><!-- contact-form -->
                        <button class="edit-btn">
                            <i class="fas fa-save"></i>
                            Update
                        </button><!-- edit-btn-->
                    </div><!-- edit-contact -->
                </div><!-- edit-form -->
                
            </main>
        </section><!--address-section -->
        
    </section><!-- end warpper -->
     
    <script src="js/address-book.js"></script>
    <script src="js/nav.js"></script>  
</body>
</html>