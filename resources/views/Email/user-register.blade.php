<h1>Olá, {{$user->name}} você realizou sua inscrição com sucesso!</h1> 
<br>
<p>
        Agora Sr(a). {{$user->name}}! você poderá usufruir das mais diversas opções de serviços
    que nosso sistema disponibiza para você!

</p> 
<br>
<p>
        A qualquer momento você pode solicitar alguns dos nossos serviços efetuando o login 
através do seu email de cadastro que é: <strong>{{$user->email}}</strong>.
</p>
<br>
<p>
Sua senha de cadastro foi: <strong>Por questões de segurança, não enviamos sua senha!</strong>
</p>
<br>
<h2>Desde já agradecemos por estar conosco sr(a). <strong>{{$user->name}}</strong>! Conte sempre Conosco. </h2>

<hr>
Este E-mail foi enviado em {{date('d/m/Y H:i:s')}}.