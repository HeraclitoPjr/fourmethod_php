
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SendMail</title>
 </head>
 <body>
     <form action="sendmail.php" method="POST">
         <label for="nome">Nome Completo</label>
         <input type="text" name="nome" placeholder="Informe o seu nome">
         <br></br>
         <label for="pais">País</label>
         <select name="pais">
             <option value="">Selecione um País</option>
             <option value="brasil">Brasil</option>
             <option value="usa">Estados Unidos</option>
         </select>
         <br></br>
         <label for="mensagem">Mensagem</label>
         <textarea name="mensagem" cols="30" rows="10" placeholder="insira sua mensagem aqui"></textarea>
         <br></br>

     </form><input type="submit" value="Enviar">
 </body>
 </html>