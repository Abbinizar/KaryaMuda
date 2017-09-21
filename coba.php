<select name="provinsi">
          <?php
               $servername = "localhost";
               $username = "root";
               $password = "";
               $db = "karyamuda";

               $conn = new mysqli($servername, $username, $password, $db);

               if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
               }else{
                  echo "<option> Connected successfully </option>";
               } 

               $sql = "SELECT * FROM provinsi";
               $result = $conn->query($sql);

               while($row=mysqli_fetch_assoc($result)){
               //My Personal echo     
              echo "<option value='".$row['id_prov']."'>".$row['namaprovinsi']."</option>";
               }

               $conn->close();

            ?>
      </select>