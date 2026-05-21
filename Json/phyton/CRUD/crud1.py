import json

from CRUD.crud import salvar_dados

#Menu principal 

def menu():
    print("\n === MENU DE CONTATOS ===")
    print("1. Adicionar")
    print("2. Listar")
    print("3. Atualizar")
    print("4. Excluir")
    print("5. Sair")

#Função para escolher grupo
def escolher_grupo():
    #Perfunta ao usuário o grupo que deseja retornar 
    print("\nTipo de contato:")
    print("1. Aluno")
    print("2. Professor")

    opcao = input("Escolha: ")

    if opcao == "1":
        return "alunos"
    
    elif opcao == "2":
        return "professores" 
    
    else:
        print("Opção inválida.")
        return None
    
#Função para ler o json
def ler_dados():
    with open("contatos.json", "r", encoding="utf-8") as arquivo:
        return json.load(arquivo)
    
#Função para salvar dados
def adicionar():
    with open("dados.json", "w", encoding="utf-8") as arquivo:
        json.dump(dados, arquivo, indent=2, ensure_ascii=False)

#Adicionar dados
def adicionar():
    grupo = escolher_grupo()

    if not grupo:
        return

    nome = input("Nome: ")
    telefone = input("Telefone: ")

    dados = ler_dados()

    dados[grupo].append({
        "nome": nome,
        "telefone": telefone
    })

    salvar_dados(dados)
    print("Contato adicionado com sucesso!.")

#Função listar contatos
def listar():
    grupo = escolher_grupo()

    if not grupo:
        return

    dados = ler_dados()
    print(f"\nLista de {grupo.upper()}:")

    for index, contato in enumerate(dados[grupo], start=1):
        print(f"{index}. {contato['nome']} - {contato['telefone']}")

#atualizar
def atualizar():
    grupo = escolher_grupo()

    if not grupo:
        return
    
    dados = ler_dados()
    index = int(input("Index do contato: ")) -1

    if 0 <= index < len(dados[grupo]):
        nome = input("Novo nome: ")
        telefone = input("Novo telefone: ")

        dados[grupo][index] = {
            "nome": nome, 
            "telefone": telefone
        }

        salvar_dados(dados)
        print("Contato atualizado com sucesso! ")
    else:
        print("Ídice inválido")
#Função para excluir
def excluir():
    grupo = escolher_grupo()
    if not grupo:
        return 
    
    dados = ler_dados()

    index = int(input("Index do contato: ")) -1
    
    #veruficar se o index é válido
    if 0 <= index < len(dados[grupo]):
        #remove o elemento da matriz
        dados[grupo].pop(index)

        salvar_dados(dados)
        print("Contato excluído com sucesso! ")

    else:
        print("Índice inválido ")

#menu principal
def main():
    while True:
        menu()
        opcao = input("Escolha uma opção: ")
        if opcao == "1":
            adicionar()

        elif opcao == "2":
            listar()

        elif opcao == "3":
            atualizar()

        elif opcao == "4":
            excluir()

        elif opcao == "5":
            print("Encerrando o programa...")
            break

        else: print("Opção inválida.")
#Executa o programa
main()

