# Builder
Builder � definido como um padr�o de cria��o.
<br />
O padr�o builder � otimo quando queremos descontruir a complexidade de uma classe em pequenos passos, por�m tem desvantagem significa que quando usamos uma classe de produto, sempre teremos outros objetos para a constru��o de nossas inst�ncias.

## Elementos que comp�em o Prototype

- Produto (FogueteProduct.php): � o objeto complexo constru�do pelo Builder.
- Construtor (FogueteBuilder.php): � uma interface que serve como contrato para a contru��o das partes do nosso objeto produto.
- Construtor Concreto (FogueteModeloIBuilder.php AND FogueteModeloIIBuilder.php): A  implementa��o concreta que constr�i o produto de acordo com os dados especificados nela.
- Director (FabricaFogueteDirector.php): � a classe respons�vel por definir a constru��o dos objetos utilizando a interface Construtor.