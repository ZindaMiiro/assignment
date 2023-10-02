<html>
<head>
    <title>Media Library</title>
</head>
<body>
    <h1>Media Library</h1>

    <div id="mediaItems">
        
    </div>

    <script>
        
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                displayMediaItems(data);
            }
        };
        xhr.open("GET", "api.php", true);
        xhr.send();

        
        function displayMediaItems(data) {
            var mediaItemsDiv = document.getElementById("mediaItems");

            
            data.forEach(function (item) {
                var itemDiv = document.createElement("div");
                itemDiv.innerHTML = "<h2>" + item.title + "</h2>" +
                                    "<p>Genre: " + item.genre + "</p>" +
                                    "<p>Year: " + item.year + "</p>" +
                                    "<p>Format: " + item.format + "</p>";

                mediaItemsDiv.appendChild(itemDiv);
            });
        }
    </script>
</body>
</html>