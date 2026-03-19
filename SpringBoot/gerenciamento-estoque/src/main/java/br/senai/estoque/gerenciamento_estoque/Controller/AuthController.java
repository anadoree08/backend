package br.senai.estoque.gerenciamento_estoque.Controller;

import jakarta.servlet.http.HttpSession;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

@Controller
public class AuthController {

    // =========================
    // PÁGINAS
    // =========================

    @GetMapping("/login")
    public String loginPage() {
        return "auth/login";
    }

    @GetMapping("/cadastro")
    public String cadastroPage() {
        return "auth/cadastro";
    }

    // =========================
    // LOGIN
    // =========================

    @PostMapping("/login")
    public String login(@RequestParam String email,
                        @RequestParam String senha,
                        HttpSession session,
                        Model model) {

        // simulação (depois você troca pelo banco)
        if(email.equals("anadore@gmail.com") && senha.equals("123")){

            // ✅ salva corretamente na sessão
            session.setAttribute("usuarioLogado", email);
            session.setAttribute("email", email);

            return "redirect:/app";
        }

        // erro de login
        model.addAttribute("erro", "Email ou senha inválidos");
        return "auth/login";
    }

    // =========================
    // CADASTRO
    // =========================

    @PostMapping("/cadastro")
    public String cadastrar(@RequestParam String nome,
                            @RequestParam String email,
                            @RequestParam String senha) {

        // futuramente: salvar no banco

        return "redirect:/login";
    }

    // =========================
    // LOGOUT
    // =========================

    @GetMapping("/logout")
    public String logout(HttpSession session){

        session.invalidate();

        return "redirect:/login";
    }
}