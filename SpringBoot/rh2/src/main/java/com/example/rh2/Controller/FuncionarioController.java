package com.example.rh2.Controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import com.example.rh2.Model.Funcionario;
import com.example.rh2.Repository.FuncionarioRepository;

@Controller
public class FuncionarioController {
    @Autowired
    FuncionarioRepository fr;

    //métodos para abrir a página

    @GetMapping("/funcionario")
    public String abrirFuncionario(){
        return "funcionario/funcionario";
    }
    
    @PostMapping("/funcionario")
    public String gravarFuncionario(Funcionario funcionario) { // pega os dados do formulário (nome e email)
        fr.save(funcionario); // salva o funcionário no banco de dados
        return "redirect:/funcionario"; // recarrega a página após salvar o funcionário no banco 
        

    }
    
}
