<?php
    require_once('db.php');
    class Contact extends Db{
        private $id;
        private $firstName ;
        private $lastName ;
        private $phone;
        private $email;
        private $address;
        private $id_user ;


        public function setInfoContacts( $firstName, $lastName,$phone ,$email, $address,$id_user)
        {
            $this->firstName = $firstName ;
            $this->lastName = $lastName ;
            $this->phone = $phone ;
            $this->email = $email ;
            $this->address = $address ;
            $this->id_user = $id_user;
        }
        public function getInfoContacts( $firstName, $lastName,$phone ,$email, $address,$id_user)
        {
            return $this->firstName = $firstName ;
            return $this->lastName = $lastName ;
            return $this->phone = $phone ;
            return $this->email = $email ;
            return $this->address = $address ;
            return $this->id_user = $id_user;
        }

        public function addContact(){
            $conn = $this->connect();
            $sql ="INSERT INTO contacts(firstName, lastName, phone, email,address,id_user ) VALUES (?,?,?,?,?,? )";
            $stm = $conn->prepare($sql);
            $stm->execute([
                $this->firstName,
                $this->lastName,
                $this->phone,
                $this->email,
                $this->address,
                $this->id_user 
            ]);
            header('location :contact.php');
        }
        public function getConatctsByIdUser($id_user){
            $conn = $this->connect();
            $stm = $conn->prepare("SELECT * FROM contacts WHERE id_user = :id");
            $stm->bindParam(":id", $id_user, PDO::PARAM_STR);
            $stm->execute(); 
            $contacts = $stm->fetchAll();
            foreach ($contacts as $contact) {
                ?>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-semibold text-gray-900 text-lg whitespace-nowrap border "><?= $contact['firstName'] . " " .$contact['lastName'] ?></th>
                            <td class="px-6 py-4 border" ><?= $contact['email'] ?></td>
                            <td class="px-6 py-4 border" ><?= $contact['phone'] ?></td>
                            <td class="px-6 py-4 border" ><?= $contact['address'] ?></td>
                            <td class="px-6 py-4 border " ><button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="">Edit</button></td>
                            <td class="px-6 py-4 border" ><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="delete.php?id=<?= $contact['id']?>">Delete</a></td>
                        </tr>
                <?php
            }
        }
        public function deleteContactById(){
            $conn = $this->connect();
            $stm = $conn->prepare("DELETE  FROM contacts WHERE id = :id");
            $stm->bindParam(":id", $id, PDO::PARAM_STR);
            $stm->execute(); 
        }
        
    }

