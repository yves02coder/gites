<?php

class Database{

    public function getPDO(){
        $user = "root";
        $pass = "";
        try{
            $db = new PDO("mysql:host=localhost;dbname=gites;charset=utf8", $user, $pass);
            return $db;
        }catch (PDOException $e){
            echo "Erreur de connexion : " .$e->getMessage();
        }
    }

    public function newUser(){
        $db = $this->getPDO();        

            $name =htmlspecialchars($_POST['name_new_user']);
            $password = htmlspecialchars($_POST['password_new_user']);

            $sql = "INSERT INTO users (password_user, name_user)
            VALUES ('$password','$name')";

            $db->exec($sql);
            
            
            header('refresh:2;url=http://localhost/Gites/');

    }

        public function getLastGites(){
            $db = $this->getPDO();
    
            $sql = $db->query("SELECT * FROM gitesinfo ORDER BY `id_gite` DESC LIMIT 10");
    ?>
    
    <div class="md:flex md:grid md:grid-flow-col md:grid-cols-2 grid-rows-2">
    
   
        <?php 
                foreach($sql as $row){
    
                $date_formater = new DateTime($row['date_depart']); 
        ?>
    
        <div class="flex m-10">
                <img class="rounded" src="<?= $row['img_gite'] ?>" alt="">
    
                <div class="flex flex-col p-5">
                    <p><?php echo $row['name_gite'] ?></p>
                    <p><?php echo $row['description_gite'] ?> </p>
                    <p><?php echo 'Prix : ' .$row['price_gite'] ?> €</p>
                    <p><?php echo 'Prix : ' .$row['price_gite'] ?> €</p>
                    <p><?php echo 'Date : ' .$date_formater->format('d/m/Y')?> €</p>
                </div>
        </div>
    
    <?php
            }
?>
        </div>

<?php
        }
    
        public function userConnexion(){
            $db = $this->getPDO();


                    $sql = "SELECT * FROM users";
                    

                    $name =htmlspecialchars( $_POST['name_user']);
                    $pass =htmlspecialchars ($_POST['password_user']);

                    if (!empty($name) && !empty($pass)) {

                        if($name === $row['name_user'] && $pass === $row['password_user']){

                    session_start();
                    $_SESSION['password'] = $row['password_user'];
                    $_SESSION['name'] = $row ['name_user'];
                    $_SESSION['id_concierge'] = $row ['id_user'];
                    header('refresh:2;url=http://localhost/Gites/');
                    echo $_SESSION['name'];
                            
            }else{
                echo "<p>Mauvais identifiants</p>";
                }
            }else{
                echo "Les champs n'ont pas été remplit";
                }

            
        
        }

}

