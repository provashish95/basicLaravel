<html>
<body>
<div>
<form action="update" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="address">
    <button type="submit">Update</button>

</form>
</div>
</body>
</html>
