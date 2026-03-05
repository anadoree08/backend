package com.example.teste_thymeleaf;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class indexController {

    //Método de requisição do tipo GET
    @RequestMapping(value = "/", method=RequestMethod.GET)
    public ModelAndView abrirIndex(){
        ModelAndView mv = new ModelAndView("index");
        String mensagem = "Olá, visitante!";
        mv.addObject("msg", mensagem);
        return mv;
    }

    //criar as rotas de navegação
    //SOBRE
    @GetMapping("/sobre")
    public String abrirSobre(){
        return "sobre";

    }

    //PRODUTOS
    @GetMapping("/produto")
    public String abrirProdutos(){
        return "produtos";
    }

    //CONTATOS
    @GetMapping("/contato")
    public String abrirContato(){
        return "contato";
    
    }

    //método para enviar o formulário com o nome do usuário
    @PostMapping("/home")
    public ModelAndView postHome(@RequestParam ("nome") String nome) {
        ModelAndView mv = new ModelAndView("index");
        String mensagem = "Olá,"+ nome;
        mv.addObject("msg", mensagem);
        mv.addObject("nome", "");

        return mv;
    }
}
