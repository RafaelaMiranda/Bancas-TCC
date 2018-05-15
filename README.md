### FACULDADE DE TECNOLOGIA DE AMERICANA
Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas

José Claudio Alvarez Junior

Rafaela Gomes

Rogério do Nascimento

Victo Ferreira

#### LABORATÓRIO DE ENGENHARIA DE SOFTWARE
#### Sistema para cadastro e organização de apresentações de trabalhos acadêmicos

Cliente: Fatec de Americana.
Objetivo: elaborar um sistema que auxilie no cadastro e na organização dos TCCs e de suas respectivas apresentações. O sistema ficará disponível para consultas no site da Fatec e apenas os professores orientadores e os professores responsáveis por organizar as bancas de cada curso terão acesso ao banco de dados para cadastrar os trabalhos que serão apresentados. O sistema terá como administradores os funcionários da coordenação. O sistema também gerará os documentos usados pela banca preenchidos de forma automática para facilitar na hora da apresentação do aluno. O sistema também irá impedir o cadastro de um mesmo professor em bancas diferentes no mesmo horário.

##### PERGUNTAS PARA A ENTREVISTA

1.	Como você desempenha suas atividades hoje?

O professor responsável por organizar as bancas de TCC de um curso na Fatec recebe as informações dos alunos matriculados do sistema SIGA e HYPNOS e verifica quem são os professores orientadores.
Apesar de contar com o SIGA e o HYPNOS, o professor responsável utiliza o Excel para organizar uma lista para verificar o número de alunos que irão apresentar seus TCCs, quais são os professores orientadores e seus horários de disponibilidade, quantos alunos esses orientadores estão orientando e finalmente organizar a banca de cada trabalho, também no Excel.

2.	Você utiliza algum tipo de sistema de informação para auxilia-lo? Se sim, qual?

Excel.

3.	Você realiza sempre as mesmas atividades quando vai realizar seu trabalho?

Sim.

4.	Existe algum caso especial em que você faz algo diferente do habitual?

Há alguns casos em que alguns alunos ainda estão sem orientadores, portanto o professor responsável precisa verificar o tema deste aluno e encontrar um professor que possa orientá-lo.

5.	Quantas pessoas/departamentos se relacionam com suas atividades?

O principal “parceiro” do professor responsável para organizar os alunos que irão apresentar o TCC é a secretária acadêmica.

6.	Você depende de alguém de outra área para desempenhar corretamente suas atividades?

Para obter os dados dos alunos, o professor utiliza o sistema HYPNOS, onde os alunos se matriculam na disciplina de Trabalho de Graduação. Além disso, os horários de aula de cada professor podem ser obtidos com a secretaria da faculdade.

7.	Alguém depende de você para dar sequência a outro trabalho?

A secretária acadêmica depende das listas de cada um dos professores que organizam as bancas de cada curso da Fatec para montar a lista completa de apresentação de TCCs.

8.	Caso você precise alterar alguma informação, qual é o procedimento?

Caso o professor responsável encontre algum erro ou precise realizar alguma alteração, ele deve avisar a secretária acadêmica, por e-mail, telefone ou pessoalmente. No entanto, o tempo para encontrar erros e realizar alterações é muito pequeno (normalmente apenas uma semana).

9.	Quais atividades você considera mais importantes para realizar seu trabalho?

Obter os horários de cada professor que vai compor a banca e auxiliar o máximo de alunos para que todos apresentem seus trabalhos no semestre atual.

10.	Você tem experiência com sistemas informatizados?

Sim. O entrevistado trabalhou durante muitos anos com desenvolvimento de sistemas e é professor nesta área há bastante tempo.

11.	Você costuma encontrar erros ou algum tipo de problema após finalizar seu trabalho? Se sim, quando você nota esses problemas?

Normalmente os erros aparecem após a lista completa com todos os cursos ser divulgada. Nesse momento os professores distribuem as cópias dos TCCs e nota-se que algumas bancas estão com o mesmo professor no mesmo horário, sendo preciso encontrar um substituto para uma das bancas.

12.	É simples resolver os problemas que surgem em seu trabalho?

Sim, para resolver os problemas basta avisar a secretaria. O maior problema é o curto espaço de tempo que se tem para resolvê-los ou até mesmo encontra-los.

#### PONTOS POSITIVOS E NEGATIVOS DA ENTREVISTA

Como o entrevistado é um professor da área de TI foi fácil obter informações e conversar com ele. Por conhecer o processo de projetar um sistema e estar atuando nessa tarefa há bastante tempo, o entrevistado teve facilidade para passar as informações mais importantes para a equipe e sugerir alguns cenários que o sistema teria que operar.
No entanto, devido à dificuldade em se comunicar com os diferentes setores da faculdade, o entrevistado não soube explicar como é feito o processo de organização da lista completa de trabalhos acadêmicos que é gerada pela secretaria após receber as informações de todos os alunos que irão apresentar seus TCCs no semestre.

#### ANÁLISE DA ENTREVISTA

O professor responsável por organizar as bancas de TCC de um curso na Fatec recebe as informações dos alunos matriculados do sistema SIGA e HYPNOS e verifica quem são os professores orientadores. Há alguns casos em que alguns alunos ainda estão sem orientadores, portanto o professor responsável precisa verificar o tema deste aluno e encontrar um professor que possa orientá-lo pessoalmente.
Apesar de contar com o SIGA e o HYPNOS, o professor responsável utiliza o Excel para organizar uma lista para verificar o número de alunos que irão apresentar seus TCCs, quais são os professores orientadores e seus horários de disponibilidade, quantos alunos esses orientadores estão orientando e finalmente organizar a banca de cada trabalho, também no Excel.
Quanto aos horários agendados, o professor responsável os sugere através dos dias em que o orientador e a banca estão na Fatec para dar suas aulas.
Após esse processo, a lista das bancas de cada curso é enviada de volta para a secretaria que irá juntar todas as bancas de todos os cursos. Nesse momento podem surgir problemas, já que um mesmo professor pode dar aula para cursos diferentes em um mesmo dia.
Os dados dos alunos são facilmente obtidos já que o SIGA e o HYPNOS armazenam todas as suas informações. Entretanto, o professor responsável tem que manualmente copiar essas informações para sua planilha.

![alt text](https://image.ibb.co/miQdoy/1.jpg)

Figura 1 - Fluxograma da montagem da lista de apresentações de TCCs pelo professor responsável
 
Fonte: elaborado pelos autores

Esse processo de juntar todos os TCCs em um único arquivo leva tempo e costuma ficar pronto muito perto da data agendada para as apresentações dos TCCs, assim, realizar ajustes por erros acaba sendo uma tarefa complicada.
Não há um sistema que informa os horários dos professores, essa informação é obtida através dos horários de aulas das planilhas que ficam expostas nos murais, no site da Fatec ou em documentos internos para os funcionários.
Há ainda alguns casos em que o aluno pede para apresentar seu trabalho em um horário diferente do que está matriculado. Assim, cabe ao professor responsável avisar a secretaria para que o aluno apresente no horário solicitado.

#### ANÁLISE DE REQUISITOS

Alunos: os alunos possuem as informações mais importantes para que as bancas de TCCs sejam montadas. Entre as informações necessárias, tanto para a lista que fica disponível para todos verem, como para os documentos que devem ser assinados pela banca, pode-se destacar:
-	RA.
-	Nome do aluno.
-	Curso do aluno.
-	Título do trabalho.
-	Área de pesquisa.
-	Nome do Orientador.
-	E-mail.
-	Telefone para contato.

Quanto aos métodos:
-	Cadastro de alunos.
-	Consulta de alunos.
-	Alteração de alunos.

Professores: os professores também têm extrema importância para a montagem da banca de TCC. Além do professor orientador, os professores convidados também precisam saber sobre os alunos e os trabalhos que irão avaliar, além disso, o professor responsável por organizar as bancas precisa conhecer os horários de trabalho de seus colegas para não escolher um dia em que o professor não está trabalhando. As informações relevantes para o cadastro de professores são:
-	Nome do professor.
-	Titulação do professor.
-	Dias de aula.
-	Horários de aula.

Quanto aos métodos:
-	Cadastro de professores.
-	Consulta de professores.
-	Alteração de professores.
-	Consulta de horários.

Trabalhos: em relação aos trabalhos, as informações contidas nos alunos e nos professores são reunidas para montar cada uma das bancas de TCC. Além disso, também é preciso estabelecer o horário da apresentação e o local da mesma. Outro ponto importante são os documentos que devem ser assinados pela banca e pelo autor do trabalho após a apresentação. Assim, as informações pertinentes ao cadastro de trabalhos são:
-	Autor do trabalho.
-	Título do trabalho.
-	Curso do autor.
-	Nome do orientador.
-	Nome do convidado 1.
-	Nome do convidado 2.
-	Dia da apresentação.
-	Horário da apresentação.
-	Local da apresentação.

Quanto aos métodos:
-	Cadastro de trabalhos.
-	Consulta de trabalhos.
-	Alteração de trabalhos.
-	Impressão da folha de aprovação.
-	Impressão da matriz de avaliação.

Quanto aos requisitos não funcionais, o sistema deve ser seguro, ser escalável e possuir uma interface amigável.

#### Diagrama de caso de uso

O diagrama de caso de uso descreve a funcionalidade proposta para um novo sistema que será projetado, é uma excelente ferramenta para o levantamento dos requisitos funcionais do sistema. Um caso de uso representa uma unidade discreta da interação entre um ator (humano ou máquina) e o sistema. A figura a seguir exibe o diagrama de caso de uso para o sistema proposto.

![alt text](https://uploaddeimagens.com.br/images/001/418/137/original/2.jpg?1526381904)
Figura 2 - Diagrama de caso de uso do sistema

#### Diagrama de classes

Um diagrama de classes é uma representação da estrutura e relações das classes que servem de modelo para objetos. É uma modelagem muito útil para o desenvolvimento de sistemas, pois define todas as classes que o sistema necessita possuir e é a base para a construção dos diagramas de comunicação, sequência e estados. A figura a seguir mostra o diagrama de classes para o sistema proposto.

![alt text](https://uploaddeimagens.com.br/images/001/418/139/full/3.jpg?1526382000)
Figura 3 - Diagrama de classes do sistema

#### Diagrama de atividades

Um diagrama de atividades é essencialmente um gráfico de fluxo, mostrando o fluxo de controle de uma atividade para outra e serão empregados para fazer a modelagem de aspectos dinâmicos do sistema. Na maior parte, isso envolve a modelagem das etapas sequenciais em um processo computacional. A figura a seguir mostra o diagrama de atividades para o sistema proposto.

![alt text](https://uploaddeimagens.com.br/images/001/418/140/full/4.jpg?1526382079)
Figura 4 - Diagrama de atividades do sistema

 #### Diagrama de sequência

#### MER

Um modelo entidade relacionamento (MER) é um modelo de dados para descrever os dados ou aspectos de informação de um domínio de negócio ou seus requisitos de processo, de uma maneira abstrata que em última análise se presta a ser implementada em um banco de dados, como um banco de dados relacional. Os principais componentes do MER são as entidades suas relações e armazenamento em bancos de dados. A figura a seguir exibe o MER feito pelo grupo.

![alt text](https://uploaddeimagens.com.br/images/001/418/141/full/5.jpg?1526382142)
Figura 5 - Modelo Entidade Relacionamento do banco de dados do sistema

#### Modelo relacional

O modelo relacional é um modelo de dados representativo, adequado a ser o modelo subjacente de um Sistema Gerenciador de Banco de Dados (SGBD), que se baseia no princípio de que todos os dados estão armazenados em tabelas. A figura a seguir representa o modelo proposto pelo grupo.

![alt text](https://uploaddeimagens.com.br/images/001/418/142/full/6.jpg?1526382182)
Figura 6 - Modelo Relacional do banco de dados do sistema

#### CONTRATO PARA DESENVOLVIMENTO DE SOFTWARE

Pelo presente instrumento particular de contrato de Prestação de Serviços, as partes abaixo qualificadas, através de seus representantes legais no final assinados, resolvem ajustar as cláusulas seguintes:
CONTRATANTE: FACULDADE DE TECNOLOGIA DE AMERICANA, pessoa jurídica de direito privado inscrita no CNPJ/MF sob o nº. 62.823.257/0016-87, sediada na Rua Emílio de Menezes, S/N, Bairro Vila Amorim, CEP 13.469-111, Cidade de Americana, São Paulo.
CONTRATADO: José Claudio Alvarez Junior, Rua Visconde de Mauá, n° 446, Jardim João Paulo II, Sumaré, São Paulo, portador do CPF: 406.996.168.24.

#### 1. OBJETO DO CONTRATO
1.1. O presente contrato tem por objetivo o desenvolvimento de um sistema de web de gerenciamento específico.
1.2. O período de vigência deste contrato é de 6 meses, prorrogado automaticamente por períodos iguais e sucessivos, salvo em caso de comunicação por escrito por uma parte à outra com no mínimo 30 dias de antecedência.
1.3. A CONTRATANTE será responsável por definir os projetos a que se refere o item 1.1, especificando sua abrangência e prazo.
1.4. Os projetos serão iniciados pelo CONTRATADO em até 07 dias, contando da emissão de ADITIVOS a este Contrato nos quais deverão constar o escopo do projeto e prazo para a sua execução.
1.5. Os trabalhos serão realizados pelo CONTRATADO, de acordo com as especificações técnicas fornecidas pela CONTRATANTE.

#### 2. CONDIÇÕES COMERCIAIS
2.1. Pelo projeto pactuado no item “1”, a CONTRATANTE não pagará ao CONTRATADO nenhum valor financeiro referente às horas de desenvolvimento e consultoria.
2.2. O valor mensal de licença de uso do sistema não será cobrado após a entrega de forma satisfatória do sistema, de acordo com entregas e escopo pré-definido por ambas as partes.

#### 3. OBRIGAÇÕES DO CONTRATADO
3.1. Executar os projetos de trata do item 1, com estrita observância das especificações técnicas indicadas pela CONTRATANTE.
3.2. Garantir que a instalação, a elaboração de novos programas, objeto deste ajuste, não infrinjam quaisquer direitos de propriedade intelectual, tais como patentes e direitos autorais, responsabilizando-se pelos prejuízos resultantes e eventuais demandas relativas à propriedade dos programas.
3.3. Manter o mais absoluto sigilo sobre as informações, documentos e técnica transmitidos pela CONTRATANTE, para possibilitar a execução de projetos ora pactuados.

#### 4. OBRIGAÇÕES DA CONTRATANTE
4.1. Colocar à disposição do CONTRATADO todas as informações que esta necessite, para consecução do objetivo do presente contrato.
4.2. Fornecer material para o desenvolvimento dos projetos contratados.
4.3. Responsabilizar-se por eventuais atrasos que possam ocorrer no projeto, decorrentes do não atendimento dos itens sob sua responsabilidade.

#### 5.CONDIÇÕES GERAIS
5.1. Serão de propriedade da CONTRATANTE todos os programas, módulos, manuais, documentação associada e sistemas, resultantes deste contrato, sendo proibido seu uso ou comercialização pelo CONTRATADO sem prévia anuência da CONTATANTE.
5.2. O presente contrato poderá ser rescindido pelas partes mediante notificação extrajudicial e escrito, com prazo de 30 dias permanecendo inalteradas as cláusulas e condições deste contrato. Poderá ainda o contrato ser rescindido independentemente de notificação por acordo entre as partes.
5.3. A CONTRATANTE poderá rescindir o presente contrato, independentemente de qualquer notificação judicial ou extrajudicial, nas seguintes hipóteses:
a) inadimplência reiterada de qualquer cláusula ou condição do presente contrato;
b) decretação de falência/insolvência ou pedido de concordata do CONTRATADO;
c) nos demais casos previstos na legislação em vigor.
5.4. Nenhuma das partes será responsável perante a outra por qualquer falha ou atraso no cumprimento das obrigações constantes do presente contrato, causados por casos fortuitos ou força maior.


E por estarem assim justas e acertadas, as partes firmam o presente instrumento em 2 (duas) vias de igual teor e forma, tudo na presença das duas testemunhas abaixo:


Americana, 18 de junho de 2018.



________________________________
CONTRATANTE

________________________________
CONTRATADO

________________________________
RAFAELA GOMES

________________________________
ROGÉRIO DO NASCIMENTO

________________________________
VICTO FERREIRA

