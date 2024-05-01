<html>
<head>
    <title>feeback form</title>
    <style>
        body{
            background-color: black;
        }
        h1,p{
            text-align: center;
            margin: auto;
            background-color: black;
            color: ghostwhite;
            padding:2%;
        }
        form{
            background-color: aliceblue;
            text-align: center;
            margin: 0% 10%; 
            padding: 5%;
        }
        select{
            margin: auto;
            padding: 0px 20px;
        }
        textarea{
            height:20px;
            width:300px;
        }
    </style>
</head>
<body>
    <h1>Customer Feedback Survey</h1>
    <p>please let us know about our services</p>
    <form action="process_feedback.php" method="post">
        <label for="first_time">Is this your first time using<br>ourproducts and services?</label><br>
        <select name="first_time" id="first_time">
        <option value>Please select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <br>
        <br>
        <label>Would you recommend our products and services to your friends and colleagues?</label>
        <input type="radio" name="recommend" id="recommend_yes" value="yes">
        <label for="recommend_yes">Yes</label>
        <input type="radio" name="recommend" id="recommend_no" value="no">
        <label for="recommend_no">No</label>
        <br>
        <br>
        <label for="feedback">Do you have any suggestions to improve our product and service?</label>
        <textarea name="feedback" id="feedback"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>