<?php
		if (isset($_POST['action'])) {
			switch ($_POST['action']) {
				case 'validate':
					echo sendMail();
					break;
			}
		}

		function sendMail() {
			$name = $_POST['nome'];
			$email = $_POST['email'];
			
			$subject = 'Estou interessado na My Geek Box';
			$myEmail = "contato@mygeekbox.com.br";//é necessário informar um e-mail do próprio domínio
			$headers = "From: $myEmail\r\n";
			$headers .= "Reply-To: $email\r\n";
			
			/*abaixo contém os dados que serão enviados para o email
			cadastrado para receber o formulário*/
			
			$corpo = "Formulário enviado\n";
			$corpo .= "Nome: " . $name . "\n";
			$corpo .= "Email: " . $email . "\n";
			
			$email_to = 'contato@mygeekbox.com.br';
			//não esqueça de substituir este email pelo seu.
			
			$status = true;//mail($email_to, $subject, $corpo, $headers);
			//enviando o email.
			
			if ($status) {
				return 'Formulário enviado com sucesso!';
			}

			return 'Falha ao enviar o Formulário.';
		}
?>