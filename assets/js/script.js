function insere(){
    var nome = $("input[name=nome]").val();
    var email_usuario = $("input[name=email_usuario]").val();
    var login = $("input[name=login]").val();
    var senha = $("input[name=senha]").val();    
    $.post("controller/cadastrarUsuario.php", { nome: nome, email_usuario: email_usuario, login: login, senha: senha },
        function(data){
            $("#resultado").html(data)
    })
    return false
}