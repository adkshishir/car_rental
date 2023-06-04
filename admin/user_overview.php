<?php
require '../process/db.php';
require '../process/admin_secure.php';
include '../include/admin_header.php';
?>
<title>User Overview</title>
</head>

<body>
    <header>
        <h1></h1>
    </header>
    <main>
        <h3></h3>
        <section>
            <table>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $i=0;
                    $selectusr="SELECT * FROM users";
                    $usrresult=mysqli_query($connect,$selectusr);
                    while($usrarr=$usrresult->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $usrarr['name'];?></td>
                    <td><?php echo $usrarr['email'];?></td>
                    <td><a href="user_view.php?id=<?php echo $usrarr['uid'];?>"><button class='button button-green'>View more</button></a>
                    </td>
                </tr>
                <?php 
                    }
                    ?>
            </table>
        </section>
    </main>
</body>

</html>