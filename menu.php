<!DOCTYPE html>
<html>
<head>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<title>Sistem Permohonan Internship</title>
<style>
nav.menu {
    margin: 0px auto;
}
.menu {
    background-color:#90af48;
    width:100%;
    marg
}

.menu a {
    text-decoration:none;
    text-shadow:#999 1px 1px 2px;
}

.menu li {
    transition:linear all 0.15s;
    list-style:none;
}

.menu ul > li {
    line-height:50px;
    height:50px;
}

.menu > ul li:hover {
    background-color:#809b40;
}

.menu ul > li > a {
    color:#FFF;
    font-weight:bold;
    padding:10px 30px;
}

.menu > ul > li {
    display:inline-block;
}

.menu ul li ul {
    position:absolute;
    margin-left:-41px;
}

.menu > ul li ul li {
    transition:linear all 0.15s;
    background-color:#90af48;
}

.menu ul li ul {
    display:none;
}

.menu ul li:hover ul {
    display:block;
}
</style>
</head>
<body>
<nav class="menu">
    <ul>
        <li><a href="profile.php">Home</a></li>
        <li><a href="mohon_intern.php">Mohon Internship</a></li>
        <li><a href="daftar_pb.php">Daftar Pusat Bertauliah</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
</body>
</html>