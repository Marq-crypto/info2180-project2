<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>Home</title>
        <link rel='stylesheet' type='text/css' href='home.css' />
       
	</head>
	<body class="container">
		<header>
            <img src="bug4.jpg" alt="Image of BugMe Icon">
            <h1>BugMe Issue Tracker</h1>
		</header>

		<main>
            
            <div id="id1">
                <h1>Issues</h1>
                <button type="submit" name ="submit" id="btn"  onclick="window.location.replace('issue_form.html')">Create New Issue</button>
            </div>
            <div id="tn">
               
                    <div id="nav_op">
                        <h3>Filter by:</h3>
                        <nav>
                                <ul id="options">
                                    <li ><button type="all" name="all" id="btn1">ALL</button></li>
                                    <li ><button type="open" name="open" id="btn2">OPEN</button></li>
                                    <li ><button type="tick" name="tick" id="btn3">MY TICKETS</button></a></li>
                                </ul>
                        </nav>
                    </div>
                
                    
                <table>

                
                <th>Title</th>
                <th>Type</th>
                <th id="stat">Status</th>
                <th>Assigned to</th>
                <th>Created</th>
                   
                <tbody>
                <?php
                include('connect.php');
                include('NewIssue.php');
                $sql = "SELECT title, type, status, assigned_to, created FROM Issues";
                $request =$conn->query($sql);
                $results = $request->fetchAll(PDO::FETCH_ASSOC);
                //$title=$_POST['title'];
                $word="#100";
                $word2="#23";
                
                if($results){
                    foreach($results as $row){
                        //if(in_array("#100", $row,TRUE) !== false){
                        echo "<tr><td>"."<a href='Issue100.html'>".$row['title']."</a>"."</td><td>".$row['type']."</td><td>".$row['status']."</td><td>".$row['assigned_to']."</td><td>".$row['created']."</td></tr>";
                    //}elseif (in_array("#23", $row,TRUE) !== false){
                        //echo "<tr><td>"."<a href='Issue23.html'>".$row['title']."</a>"."</td><td>".$row['type']."</td><td>".$row['status']."</td><td>".$row['assigned_to']."</td><td>".$row['created']."</td></tr>";
                    //}
                }
                    
                }
                ?>
            </tbody>

            </table>


                   <!-- <thead>
                        <th>Title</th>
                        <th>Type</th>
                        <th id="stat">Status</th>
                        <th>Assigned to</th>
                        <th>Created</th>
                    </thead>
                    <tbody>
                        <tr id="uline">
                            <td><strong>#100</strong> <a href="http://localhost/info2180-project2/Issue100.html" class="link">XSS Vulnerability in Add User Form</a></td>
                            <td>Bug</td>
                            <td class="centre"><button id="open1" value = "OPEN">OPEN</button></td>
                            <td>Tom Brady</td>
                            <td>2019-11-01</td>
                        </tr>
                        <tr id="uline">
                            <td><strong>#23</strong> <a href ="http://localhost/info2180-project2/Issue23.html" class="link">Location Service isn't working</a></td>
                            <td>Bug</td>
                            <td class="centre"><button id="open">OPEN</button></td>
                            <td>Jan Brady</td>
                            <td>2019-10-15</td>
                        </tr>
                        <tr id="uline">
                            <td><strong>#16</strong> <a href="http://localhost/info2180-project2/Issue16.html" class="link">Setup Logger</a></td>
                            <td>Proposal</td>
                            <td class="centre"><button id="closed">CLOSED</button></td>
                            <td>Marsha Brady</td>
                            <td>2019-08-10</td>
                        </tr>
                        <tr id="uline">
                            <td><strong>#50</strong> <a href="http://localhost/info2180-project2/Issue50.html" class="link">Create API Documentation</a></td>
                            <td>Proposal</td>
                            <td class="centre"><button id="prog" >IN PROGRESS</button></td>
                            <td>Mike Brady</td>
                            <td>2019-10-29</td>
                        </tr>
                        <tr>
                            <td><strong>#24</strong> <a href="http://localhost/info2180-project2/Issue24.html" class="link">Allow results to be sorted</a></td>
                            <td>Proposal</td>
                            <td class="centre"><button id="prog1">IN PROGRESS</button></td>
                            <td>Marcia Brady</td>
                            <td>2019-10-20</td>
                        </tr>
                    </tbody> -->
                
        </div>

                <aside id="part">
                    <ul>
                        <li id="home"><a href="home.php">Home</a></li>
                        <li id="auser"><a href="User.html">Add User</a></li>
                        <li id="issue"><a href="issue_form.html">New Issue </a></li>
                        <li id="out"><a href="http://localhost/info2180-project2/login.html">Logout</a></li>
                        
                    </ul>
                </aside>
			
			
		</main>

	</body>
</html>