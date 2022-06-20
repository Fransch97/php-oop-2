
   <?php
    require_once __DIR__ . '/../data/data.php';
   $userObj =[];
   $productObj =[];
   
   
   foreach($users as $user){
      if(!$user["mail"] or !$user["password"]){
         $us = new User($user['name'],$user['surname'],$user['birth_date'],$user['country'],$user['adress'],$user['card_date']);
         $userObj[]= $us;
      }else{
         $us = new UserAccount($user['name'],$user['surname'],$user['birth_date'],$user['country'],$user['adress'],$user['card_date'],$user['mail'],$user['password']);
         $userObj[]= $us;
      }
   }


   foreach($products as $key=>$product){

      if($product['class'] === "food"){
         $pro = new Food($product['expiration_date'],$product['content'],$product['price'],$product['title'],$product['categ'],$product['produced']);
         $productObj[] = $pro;
      }elseif($product['class'] === "game"){
         $pro = new Game($product['bestAge'],$product['warnings'],$product['price'],$product['title'],
         $product['categorie'],$product['bestAge']);
         $productObj[] = $pro;
      }elseif($product['class'] === "furniture"){
         $pro = new Furniture($product['animal_type'],$product['size'],$product['dimensions'],$product['price'],$product['title'],$product['categorie'],$product['produced']);
         $productObj[] = $pro;
      }

      if($product['saison']){
         $productObj[$key]->setSaison($product['saison'], $product['s_start'],$product['s_end']);
      }

   }

   var_dump($productObj)
   ?>
   <main>
      <h1>Utenti</h1>
      <?php foreach($userObj as $user):
             
      ?>
         <div class="user">
            <ul>
               <li>Nome: <?php echo $user->getName()?></li>
               <li>Cognome: <?php echo $user->getSurname()?></li>
               <li>Data di nascità: <?php echo $user->getBirthDate()?></li>
               <li>Nazionalità: <?php echo $user->getCountry()?></li>
               <li>Indirizzo: <?php echo $user->getAdress()?></li>
               <li>Sconto: <?php echo $user->getDiscount()?></li>
               <?php if(get_class($user) === "UserAccount"):?>
                  <li>Mail: <?php echo $user->getMail()?></li>
               <?php endif ;?>
            </ul>
         </div>
      <?php endforeach ;?>


      <h1>Prodotti</h1>
      <?php foreach($productObj as $product):
         if(($product->getSaison() === false) or ($product->getSaisonStart() <= date('m') and $product->getSaisonEnd() >= date('m'))):
         ?>
         <div class="product">
         <ul>
               <li>Titolo: <?php echo $product->getTitle()?></li>
               <li>Prezzo: <?php echo $product->getPrice()?> €</li>
               <li>Categoria prodotto: <?php echo $product->getCategorie()?></li>
               <?php if(get_class($product) === "Food"):?>
                  <li>Data di scadenza: <?php echo $product->getExpiration_Date()?></li>
                  <li>Contenuto: <?php echo $product->getEatContent()?></li>
               <?php elseif(get_class($product) === "Game"):?>
                  <li>Contenuto: <?php echo $product->getBestAge()?></li>
                  <li>Contenuto: <?php echo $product->getWarnings()?></li>
               <?php elseif(get_class($product) === "Furniture"):?>
                  <li>Tipo di animale ideale: <?php echo $product->getAnimalType()?></li>
                  <li>Grandezza animale: <?php echo $product->getsize()?></li>
                  <li>Dimensione mobile: <?php echo $product->getDimension()?></li>
               <?php endif ;?>
            </ul>
         </div>
      <?php endif ;?> 
      <?php endforeach ;?> 


   </main>