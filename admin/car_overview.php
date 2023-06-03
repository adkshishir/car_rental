<?php
    include '../include/admin_header.php';
    require '../process/db.php';
?>
    <title>Car Overview</title>
</head>
<body>
    <header>
        <h1>

        </h1>
    </header>
    <main>
        <section>
            <h2> 

            </h2>
            <table>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>BMW</td>
                    <td>lsjdfw23</td>
                    <td><a href="../uploads/" target="_blank"><img src="../uploads/" alt="car"></a></td>
                    <td>
                        <a href="car_view.php?id=1"><button>View more</button></a>
                        <a href="car_edit.php?id=1"><button>Edit</button></a>
                        <a href="http://"><button>Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>BMW</td>
                    <td>lsjdfw23</td>
                    <td><a href="../uploads/" target="_blank"><img src="../uploads/" alt="car"></a></td>
                    <td>
                        <a href="http://"><button>View more</button></a>
                        <a href="http://"><button>Edit</button></a>
                        <a href="http://"><button>Delete</button></a>
                    </td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>