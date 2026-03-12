package br.senai.estoque.gerenciamento_estoque.Controller;


import jakarta.servlet.http.HttpSession;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

@Controller
public class AuthController {

    @GetMapping("/login")
    public String loginPage() {
        return "auth/login";
    }

    @GetMapping("/cadastro")
    public String cadastroPage() {
        return "auth/cadastro";
    }

    @PostMapping("/login")
    public String login(@RequestParam String nif,
                        @RequestParam String senha,
                        HttpSession session,
                        Model model) {

        if(nif.equals("123") && senha.equals("123")){

            session.setAttribute("usuarioLogado", true);
            session.setAttribute("nif", nif);

            return "redirect:/app";
        }

        model.addAttribute("erro", "NIF ou senha inválidos.");
        return "auth/login";
    }

    @GetMapping("/logout")
    public String logout(HttpSession session){

        session.invalidate();

        return "redirect:/";
    }

}
