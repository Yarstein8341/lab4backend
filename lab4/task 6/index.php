<?php

require_once 'autoload.php';

// Створення об'єктів класу Circle
$circle1 = new Circle(100, 150, 50);
$circle2 = new Circle(200, 150, 75);

// Перевірка методу __toString()
echo $circle1 . "<br>";
echo $circle2 . "<br>";

// Перевірка перетину кіл
$intersects = $circle1->intersects($circle2) ? "Кола перетинаються." : "Кола не перетинаються.";
echo $intersects . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кола</title>
    <style>
        canvas {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<canvas id="myCanvas" width="500" height="400"></canvas>

<script>
    function drawCircle(ctx, x, y, radius, color) {
        ctx.beginPath();
        ctx.arc(x, y, radius, 0, 2 * Math.PI);
        ctx.fillStyle = color;
        ctx.fill();
        ctx.stroke();
    }

    function drawAxes(ctx) {
        ctx.strokeStyle = 'black';
        ctx.lineWidth = 2;

        ctx.beginPath();
        ctx.moveTo(0, 200);
        ctx.lineTo(500, 200);
        ctx.stroke();

        ctx.beginPath();
        ctx.moveTo(250, 0);
        ctx.lineTo(250, 400);
        ctx.stroke();

        // Позначки на осі X
        for (let x = -200; x <= 200; x += 50) {
            ctx.beginPath();
            ctx.moveTo(250 + x, 200 - 5);
            ctx.lineTo(250 + x, 200 + 5);
            ctx.stroke();
            ctx.fillText(x, 250 + x - 5, 200 + 15);
        }

        // Позначки на осі Y
        for (let y = -200; y <= 200; y += 50) {
            ctx.beginPath();
            ctx.moveTo(250 - 5, 200 - y);
            ctx.lineTo(250 + 5, 200 - y);
            ctx.stroke();
            ctx.fillText(y, 250 - 25, 200 - y + 5);
        }
    }

    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext('2d');

    // Малюємо систему координат
    drawAxes(ctx);

    // Координати та радіуси кіл
    const circle1 = { x: <?php echo $circle1->getX() + 250; ?>, y: <?php echo 200 - $circle1->getY(); ?>, radius: <?php echo $circle1->getRadius(); ?> };
    const circle2 = { x: <?php echo $circle2->getX() + 250; ?>, y: <?php echo 200 - $circle2->getY(); ?>, radius: <?php echo $circle2->getRadius(); ?> };

    // Малюємо кола
    drawCircle(ctx, circle1.x, circle1.y, circle1.radius, 'rgba(255, 0, 0, 0.5)');
    drawCircle(ctx, circle2.x, circle2.y, circle2.radius, 'rgba(0, 0, 255, 0.5)');
</script>

</body>
</html>
