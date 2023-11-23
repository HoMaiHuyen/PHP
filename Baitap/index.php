<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="form-container">
        <form action="result.php" method="get">
            <div class="input">
                <label>
                    Name
                    <input required="" type="text" class="input" name="name"><br>
                </label>
                <label>Club you want to apply</label>
                <select id="clubs" name="clubs">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="English Club">English club</option>
                    <option value="Guitar Club">Guitar club</option>
                    <option value="Dancer Club">Dancer club</option>
                    <option value="IT Club">IT club</option>
                </select>
            </div>
            <div class="radio">
                Be time for you<br>
                <input type="radio" id="time" name="time" value="Saturday mornings">
                <label>Saturday mornings</label><br>
                <input type="radio" id="time" name="time" value="Saturday afternoons">
                <label>Saturday afternoons</label><br>
                <input type="radio" id="time" name="time" value="Sunday afternoons">
                <label>Sunday afternoons</label><br> 
            </div>
            <div class="checkbox">
                Your skills<br>
                <div class="left_skills">
                    <input type="checkbox" id="skill" name="skill[]" value="The best coder">
                    <label>The best coder</label><br>
                    <input type="checkbox" id="skill" name="skill[]" value="A super star">
                    <label>A super star</label><br>
                    <input type="checkbox" id="skill" name="skill[]" value="Singer">
                    <label>Singer</label><br>
                    <input type="checkbox" id="skill" name="skill[]" value="The best eater">
                    <label>The best eater</label><br>
                </div>
                <div class="right_skills">
                    <input type="checkbox" id="" name="skill[]" value="Good in arts">
                    <label>Good in arts</label><br>
                    <input type="checkbox" id="" name="skill[]" value="A crazy dancer">
                    <label>A crazy dancer</label><br>
                    <input type="checkbox" id="" name="skill[]" value="Good in design">
                    <label>Good in design</label><br>
                    <input type="checkbox" id="" name="skill[]" value="Good in speeches">
                    <label>Good in speeches</label><br>
                </div>
            </div>
            <button type="submit">SUBMIT !</button>
        </form>
    </div>
    
</body>
</html>