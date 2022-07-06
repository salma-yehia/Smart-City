let options = {
    startAngle: -1.55,
    size: 150,
    value: 0.85,
    fill: { gradient: ['#054a52', '#0f9ead'] }
}
$(".circle .bar").circleProgress(options).on('circle-animation-progress',
    function(event, progress, stepValue) {
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
    });
$(".circle .bar").circleProgress({
    value: 0.<?php 
            $sql6=mysqli_query($conn,"SELECT * FROM soil");
            $example6 = "SELECT * FROM soil ORDER BY id DESC LIMIT 1";
            if($result6 = mysqli_query($conn, $example6)){
                if(mysqli_num_rows($result6) > 0){
                    while($row6 = mysqli_fetch_array($result6)){
                        $soil =$row6['soil'] ;
                        echo $soil;
                    }
                    mysqli_free_result($result6);
                } else{
                    echo "No records matching your query were found.";
                    }
            } else{
                echo "ERROR: Could not able to execute $sq6. " . mysqli_error($conn);
                }
            ?>

});        