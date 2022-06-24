# Builder
Builder é definido como um padrão de criação.
<br />
O padrão builder é otimo quando queremos descontruir a complexidade de uma classe em pequenos passos, porém tem desvantagem significa que quando usamos uma classe de produto, sempre teremos outros objetos para a construção de nossas instâncias.

## Elementos que compõem o Prototype

- Produto (FogueteProduct.php): É o objeto complexo construído pelo Builder.
- Construtor (FogueteBuilder.php): É uma interface que serve como contrato para a contrução das partes do nosso objeto produto.
- Construtor Concreto (FogueteModeloIBuilder.php AND FogueteModeloIIBuilder.php): A  implementação concreta que constrói o produto de acordo com os dados especificados nela.
- Director (FabricaFogueteDirector.php): É a classe responsável por definir a construção dos objetos utilizando a interface Construtor.