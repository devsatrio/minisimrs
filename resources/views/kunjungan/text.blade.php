<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVG.js Shape</title>
  <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@3.1/dist/svg.min.js"></script>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f0f0f0;
    }
  </style>
</head>

<body>
  <div id="drawing"></div>

  <script>
    const draw = SVG().addTo('#drawing').size(220, 220);

    function randomColor() {
      return '#' + Math.floor(Math.random() * 16777215).toString(16);
    }

    // Kotak luar (border hitam)
    draw.rect(180, 180)
        .move(20, 20)
        .fill('none')
        .stroke({ width: 3, color: '#000' });

    // Kotak tengah (bisa diklik + border hitam)
    const center = draw.rect(100, 100)
        .move(60, 60)
        .fill('#cccccc')
        .stroke({ width: 3, color: '#000' })
        .click(function () { this.fill(randomColor()); })
        .css('cursor', 'pointer');

    // Function polygon interaktif + border hitam
    function clickablePolygon(points, initialColor) {
      return draw.polygon(points)
        .fill(initialColor)
        .stroke({ width: 3, color: '#000' })   // <--- BORDER HITAM
        .click(function () { this.fill(randomColor()); })
        .css('cursor', 'pointer');
    }

    // TOP
    clickablePolygon('60,60 160,60 200,20 20,20', '#ff4d4d');

    // RIGHT
    clickablePolygon('160,60 160,160 200,200 200,20', '#4dff4d');

    // BOTTOM
    clickablePolygon('60,160 160,160 200,200 20,200', '#4d4dff');

    // LEFT
    clickablePolygon('60,60 60,160 20,200 20,20', '#ffa64d');

  </script>
</body>
</html>
