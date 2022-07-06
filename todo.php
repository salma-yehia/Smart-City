<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/todo.css">
    <link rel="stylesheet" href="css/problem.css">
    <script src="js/jquery.min.js"></script> 
    <title>Todo list</title>
</head>
<?php include 'mistake.php'; ?> 
        <section class="todolist-section">
            <ul class="breadcrumb">
                <li>Application</li>
                <li class="include">To Do List</li>
            </ul>
            <h1>To Do List</h1>
            <hr>
            <div class="todo-container">
                <input type="text" id="input" placeholder="Press enter to add your task">
                <ul class="ul"></ul>
            </div><!-- container of todo list -->
            
        </section><!-- to do list -->
        
    </section><!-- end warpper -->
    
    
    <script type="text/javascript">
        ///// code of todo list
        $(document).ready(function(){
            $('#input').change(function(){
                var input = $(this).val();
                $('.ul').append('<li>' + input + '<i class="fas fa-check"></i> <i class="fas fa-trash-alt"></i> </li>');
                $(this).val('');
            });
            $('.ul').on('click' , '.fa-trash-alt' ,function(){
                $(this).parent('li').fadeOut(200);
            });
            $('.ul').on('click' , '.fa-check' ,function(){
                $(this).parent('li').toggleClass('checked');
            });
            
        });
    </script>
    <script src="js/nav.js"></script>
</body>
</html>