<!DOCTYPE html>

  
<html lang="en" >

<head>
  
  <center>
    <h1><font color="#151515";>ＣＯＮＴＲＯＬ ＰＡＮＬＥ 
  <meta charset="UTF-8">
  <title>Control Panel</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background ="b.png">

<center>
<font color="#13232f";>Candidate :
<br>START 
<input type="date" required autocomplete="off"/ Style="background-color:#c1bdba" min="2018-01-01"max="2040-12-31">END
<input type="date" required autocomplete="off"/Style="background-color:#c1bdba" min="2018-01-01"max="2040-21-31"> <br>
<font color="#13232f";>Vote :
<br>START
<input type="date" required autocomplete="off"/ Style="background-color:#c1bdba" min="2018-01-01"max="2040-12-31">END 
<input type="date" required autocomplete="off"/Style="background-color:#c1bdba" min="2018-01-01"max="2040-21-31"> <br>
<br>
 

	<button type="button" onclick="alert('DONE')"  >SAVE</button> <button type="button" onclick="alert('EXIT')"  >DELETE</button>

</center>

<div id="permissionWrapper" class="permissionWrapper">
  <label for="inputFilterPermission" class="listFilterLabel"><font color="#585858";>Filter</label>
  <input id="inputFilterPermission" style="background-color:white";type="text"class="listFilterInput"/>
  <a id="addUser" href="#" class="iconAdd" title="Add new user"></a>
  <div class="clear"></div>
  <table id="listFilterPermission" style="width:100%"style="height:100%"class="listFilterContainer permissionsTable" cellspacing="1" cellpadding="1">
    <thead id="permissionsHead">
      <tr class="doNotFilter">
        <th>Username</th>
		  <th><div id="tape" "tape">UserType</div></th>
        <th><div id="view" "view">Accept</div></th>
        <th><div id="edit"  "edit">View</div></th>
        <th><div id="delete" "delete">Delete</div></th>

        <th></th>
      </tr>
    </thead>
    <tbody id="permissionsBody">
      <tr>
        <td><span class="iconUser"></span><span contenteditable="true" class="userName"></span></td>
		<td> <text type="text"  > </text></div></td>
        <td> <button type="button"   >Accept</button> </div></td>
        <td> <button type="button"  > View</button></div></td>
        <td> <button type="button"  > Delete</button></div></td>
	
        
        <td><a href="#" class="iconRemove deleteUser" title="Remove this user"></a></td>
      </tr>
      <tr>
        <td><span class="iconUser"></span><span contenteditable="true" class="userName"></span></td>
        <td> <text type="text"  > </text></div></td>
        <td> <button type="button"   >Accept</button> </div></td>
        <td> <button type="button"  > View</button></div></td>
        <td> <button type="button"  > Delete</button></div></td>
	
        
        <td><a href="#" class="iconRemove deleteUser" title="Remove this user"></a></td>
      </tr>
      <tr>
        <td><span class="iconUser"></span><span contenteditable="true" class="userName"></span></td>
        <td> <text type="text"  > </text></div></td>
        <td> <button type="button"   >Accept</button> </div></td>
        <td> <button type="button"  > View</button></div></td>
        <td> <button type="button"  > Delete</button></div></td>
	
        
        <td><a href="#" class="iconRemove deleteUser" title="Remove this user"></a></td>
      </tr>
      <tr>
        <td><span class="iconUser"></span><span contenteditable="true" class="userName"></span></td>
        <td> <text type="text"  > </text></div></td>
        <td> <button type="button"   >Accept</button> </div></td>
        <td> <button type="button"  > View</button></div></td>
        <td> <button type="button"  > Delete</button></div></td>
	
        
        <td><a href="#" class="iconRemove deleteUser" title="Remove this user"></a></td>
      </tr>
       <tr>
        <td><span class="iconUser"></span><span contenteditable="true" class="userName"></span></td>
        <td> <text type="text"  > </text></div></td>
        <td> <button type="button"   >Accept</button> </div></td>
        <td> <button type="button"  > View</button></div></td>
        <td> <button type="button"  > Delete</button></div></td>
	
        
        <td><a href="#" class="iconRemove deleteUser" title="Remove this user"></a></td>
      </tr>
    </tbody>
  </table>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
 
