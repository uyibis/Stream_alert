<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Pusher</h2>
<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<script>
    var pusher = new Pusher("0394c047934dcb7424a5", {
        cluster: "mt1",
    });

    var channel = pusher.subscribe('status-liked');

    channel.bind("event-name", (data) => {
        console.log(data);
       alert('hi');
    });
</script>
</body>
</html>
