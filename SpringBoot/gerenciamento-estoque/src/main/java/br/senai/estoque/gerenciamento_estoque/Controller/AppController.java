package br.senai.estoque.gerenciamento_estoque.Controller;



import jakarta.servlet.http.HttpSession;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class AppController {

    @GetMapping("/app")
    public String appHome(HttpSession session, Model model) {

        Object usuario = session.getAttribute("usuarioLogado");

        if(usuario == null){
            return "redirect:/login";
        }

        model.addAttribute("nif", session.getAttribute("nif"));

        return "app/index";
    }

}
