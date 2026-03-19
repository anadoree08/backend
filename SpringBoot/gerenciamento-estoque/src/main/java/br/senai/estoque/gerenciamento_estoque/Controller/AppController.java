package br.senai.estoque.gerenciamento_estoque.Controller;

import jakarta.servlet.http.HttpSession;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class AppController {

    @GetMapping("/app")
    public String appHome(HttpSession session, Model model) {

        // pega o usuário da sessão
        Object usuario = session.getAttribute("usuarioLogado");

        // se não estiver logado → volta pro login
        if(usuario == null){
            return "redirect:/login";
        }

        // envia o email pra tela
        model.addAttribute("email", session.getAttribute("email"));

        // abre a página interna
        return "app/index";
    }

}