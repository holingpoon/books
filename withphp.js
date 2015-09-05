function setup() {
var readMeText = $("<p/>").append("This example has jQuery making a call to PHP to retrieve items from database. Making a call to server for PHP is slower than parsing a JSON file.");
    $.getJSON('testdb.php', function(books) {
            $.each( books, function (index, book) {
                var status = "#" + book.status;
                var image = "<div class='bookimage'><img class='book' width='100' src=\'images/" + book.image + "\' /></div>";
                var aBook = $("<p/>").append(
                "Title: " + book.title + "<br />" +
                "Author: " + book.firstname + " " + book.lastname 
                );
                $(status).append(aBook).append(image);
            });
        });
        $("#readme").append(readMeText);
}

/*function drawform() {
    var theButton = $("<input/>").attr("type","button").attr("name","test").attr("value","Submit");
    $("#theform").append(theButton);
    theButton.onclick = function() {
        $("#theform").append("The results");
    };
}*/


