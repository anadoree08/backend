package br.senai.estoque.gerenciamento_estoque.Controller;



import java.util.List;

import org.springframework.web.bind.annotation.*;

import br.senai.estoque.gerenciamento_estoque.Model.Material;

@RestController
@RequestMapping("/materiais")
public class MaterialController {

    private final br.senai.estoque.gerenciamento_estoque.Repository.MaterialRepository repository;

    public MaterialController(br.senai.estoque.gerenciamento_estoque.Repository.MaterialRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<br.senai.estoque.gerenciamento_estoque.Model.Material> listar() {
        return repository.findAll();
    }

    @PostMapping
    public Material criar(@RequestBody Material material) {
        return repository.save(material);
    }

    @DeleteMapping("/{id}")
    public void deletar(@PathVariable Long id) {
        repository.deleteById(id);
    }
}