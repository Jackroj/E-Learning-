<?php
include './header4.php';
?>
<article id="front_article">
    <h3>[4] Software Design</h3>
    <span class="chnav">
        <span class="lnav">
            <a id="normal_link" href="unit3.php">Previous</a>
        </span>
        <span class="rnav">
            <a id="normal_link" href="unit5.php">Next</a>
        </span>
    </span>
    <h4>DEFINITION</h4>
    <p>
        Software design is the process of implementing software solutions to one or more set of problems. One of the important parts of software design is the software requirements analysis (SRA). It is a part of the software development process that lists specifications used in software engineering.
    </p>
    <h4>Introduction</h4>
    <p>Software design is the process by which an agent creates a specification of a software artifact, intended to accomplish goals, using a set of primitive components and subject to constraints.[1] Software design may refer to either "all the activities involved in conceptualizing, framing, implementing, commissioning, and ultimately modifying complex systems" or "the activity following requirements specification and before programming, as ... [in] a stylized software engineering process."[2]</p>
<p>Software design usually involves problem solving and planning a software solution. This includes both low-level component and algorithm design and high-level, architecture design.
</p>
<h4>5.1FUNDAMENDAL DESIGN CONCEPTS</h4>
<p>
    A set of fundamental software design concepts has evolved over the past four decades, each providing the software designer with a foundation from which more sophisticated design methods can be applied. Each concept helps the soft ware engineer to answer the following questions:
</p>
A good specification will have:
<ol>
    <li>1.	What criteria can be used to partition software into individual components?
    <li>	How is function or data structure detail separated from a conceptual representation of software?
    <li>	Are there uniform criteria that define the technical quality of a software design?
</ol>
The fundamental design concepts are:
<ul>
    <li>Abstraction - allows designers to focus on solving a problem without being concerned about irrelevant lower level details (procedural abstraction - named sequence of events, data abstraction - named collection of data objects)
    <li>	Refinement - process of elaboration where the designer provides successively more detail for each design component
    <li>	Modularity - the degree to which software can be understood by examining its components independently of one another
    <li>	Software architecture - overall structure of the software components and the ways in which that structure provides conceptual integrity for a system
    <li>	Control hierarchy or program structure - represents the module organization and implies a control hierarchy, but does not represent the procedural aspects of the software (e.g. event sequences)
    <li>	Structural partitioning - horizontal partitioning defines three partitions (input, data transformations, and output); vertical partitioning (factoring) distributes control in a top-down manner (control decisions in top level modules and processing work in the lower level modules). [Follow the link for more details on these concepts]
    <li>	Data structure - representation of the logical relationship among individual data elements (requires at least as much attention as algorithm design)
    <li>	Software procedure - precise specification of processing (event sequences, decision points, repetitive operations, data organization/structure)
    <li>	Information hiding - information (data and procedure) contained within a module is inaccessible to modules that have no need for such information
</ul>
    <h1>5.2 MODULES AND MODULARIZATION CRITERIA</h1>
    <h3>5.2.1: COUPLING AND COHESION</h3>
    <p>
        In software engineering, coupling is the manner and degree of interdependence between software modules; a measure of how closely connected two routines or modules are;[1] the strength of the relationships between modules. 
Coupling is usually contrasted with cohesion. Low coupling often correlates with high cohesion, and vice versa. Low coupling is often a sign of a well-structured computer system and a good design, and when combined with high cohesion, supports the general goals of high readability and maintainability.
    </p>
    <h1>TYPES OF COUPLING</h1>
    <dl>
        <dt>Content coupling (high):
        <dd>Content coupling (also known as Pathological coupling) occurs when one module modifies or relies on the internal workings of another module (e.g., accessing local data of another module).
Therefore changing the way the second module produces data (location, type, timing) will lead to changing the dependent module.
        <dt>Common coupling:
        <dd>Common coupling (also known as Global coupling) occurs when two modules share the same global data (e.g., a global variable).
Changing the shared resource implies changing all the modules using it.
        <dt>External coupling:
        <dd>External coupling occurs when two modules share an externally imposed data format, communication protocol, or device interface. This is basically related to the communication to external tools and devices.
        <dt>Control coupling:
        <dd>Control coupling is one module controlling the flow of another, by passing it information on what to do (e.g., passing a what-to-do flag).
        <dt>Data coupling:
        <dd>Data coupling occurs when modules share data through, for example, parameters. Each datum is an elementary piece, and these are the only data shared (e.g., passing an integer to a function that computes a square root).
    </dl>
    
    <h1>COHESION</h1>    
    <p>In computer programming, cohesion refers to the degree to which the elements of a module belong together. Thus, it is a measure of how strongly related each piece of functionality expressed by the source code of a software module is.
Cohesion is an ordinal type of measurement and is usually described as “high cohesion” or “low cohesion”. Modules with high cohesion tend to be preferable because high cohesion is associated with several desirable traits of software including robustness, reliability, reusability, and understandability whereas low cohesion is associated with undesirable traits such as being difficult to maintain, test, reuse, and even understand.
    </p>
    
    <h1>TYPES OF COHESION</h1>
    <p>
Cohesion is a qualitative measure, meaning that the source code to be measured is examined using a rubric to determine a classification. Cohesion types, from the worst to the best, are as follows:
    </p>
    <dl>
        <dt>Coincidental cohesion (worst):
        <dd>Coincidental cohesion is when parts of a module are grouped arbitrarily; the only relationship between the parts is that they have been grouped together (e.g. a “Utilities” class).
        <dt>Logical cohesion:
        <dd>Logical cohesion is when parts of a module are grouped because they are logically categorized to do the same thing, even if they are different by nature (e.g. grouping all mouse and keyboard input handling routines).
        <dt>Temporal cohesion:
        <dd>Temporal cohesion is when parts of a module are grouped by when they are processed - the parts are processed at a particular time in program execution (e.g. a function which is called after catching an exception which closes open files, creates an error log, and notifies the user).
        <dt>Procedural cohesion:
        <dd>Procedural cohesion is when parts of a module are grouped because they always follow a certain sequence of execution (e.g. a function which checks file permissions and then opens the file).
        <dt>Communicational/informational cohesion:
        <dd>Communicational cohesion is when parts of a module are grouped because they operate on the same data (e.g. a module which operates on the same record of information).
        <dt>Sequential cohesion:
        <dd>Sequential cohesion is when parts of a module are grouped because the output from one part is the input to another part like an assembly line (e.g. a function which reads data from a file and processes the data).
        <dt>Functional cohesion (best)
        <dd>Functional cohesion is when parts of a module are grouped because they all contribute to a single well-defined task of the module (e.g. Lexical analysis of an XML string).
    </dl>
    <h1>DESIGN NOTATION</h1>
    DATA FLOW DIAGRAM<br>
    <p>
Data flow diagram(“bubble chart”) are directed graphs  in which nodes specify processing activities and the arcs  specify data item transmitted between processing nodes.A Data Flow Diagram (DFD) is a graphical representation of the "flow" of data through an information system, modeling its process aspects. A DFDis often used as a preliminary step to create an overview of the system, which can later be elaborated.
    </p>
<div class="center"><img class="center" src="Images/f29.png"></div>
<div class="center"><img class="center" src="Images/f30.png"></div>
<h1>STRUCTURE CHART</h1>
<p>Structure chare are used during architectural design to document hierarchical structure, parameter and interconnections in a system. A structure chart is different from flow chat in two ways: 1.A structure chart has no decision boxes and 2.sequential ordering of task inherent in a flow chart can be suppressed in a structure chart. <br>

Ex for structure chart:
</p>
<div class="center"><img class="center" src="Images/f31.png" width="600px"></div>

HIPO DIAGRAMS
<div class="center"><img class="center" src="Images/f32.png" width="600px"></div>
<h1>PROCEDURE TEMPLATES</h1>
<p>
    It is a starting stage of architectural design, only the information in level 1 need to be supplied. As design progresses, the information on level 2, 3, and 4 can be included in successive steps.
</p>
<div class="center"><img class="center" src="Images/f33.png" width="500px"></div>
<h1>PSEUDOCODE</h1>
<p>
    Pseudocode is an informal high-level description of the operating principle of a computer program or other algorithm. It uses the structural conventions of a programming language, but is intended for human reading rather than machine reading.  Catching errors at the pseudocode stage is less costly than catching them later in the development process. Once the pseudocode is accepted, it is rewritten using the vocabulary 
and syntax of a programming language.
</p>
Ex for pseuducode:<br>
<div class="center"><img class="center" src="Images/f34.png" width="500px"></div>
<div class="center"><img class="center" src="Images/f35.png"></div>
<h1>STRUTURED FLOWCHART</h1>
<p>Flowcharts are traditional means for specifying and documenting algorithmic detail in a software system.
A flowchart is a type of diagram that represents an algorithm, workflow or process, showing the steps as boxes of various kinds, and their order by connecting them with arrows. This diagrammatic representation illustrates a solution model to a given problem. Flowcharts are used in analyzing, designing, documenting or managing a process or program in various fields</p>
<div class="center"><img class="center" src="Images/f36.png"></div>
<h1>DECITION TABLE</h1>
<p>
    Decision table is a way to decision making that involves considering a variety of conditions and their interrelationships, particular for complex interrelationships. People use decision table to represent and discover business logic, which ultimately lead to better business. Decision tables are a precise yet compact way to model complex rule sets and their corresponding actions.</p>
<p>Decision tables, like flowcharts and if-then-else and switch-case statements, associate conditions with actions to perform, but in many cases do so in a more elegant way.
</p>
<div class="center"><img class="center" src="Images/f37.png"></div>
<h1>5.4 DESIGN TECNIQUES</h1>
5.4.2 LEVELS OF ABSTRACTION<br>
<p>
The highest level of abstraction is the entire system. The next level would be a handful of components, and so on, while the lowest level could be millions of objects.it is bottomup design technique.</p>
<p>The software engineering community often aspires to "higher levels of abstraction". Many believe that is the solution to defeat complexity and to increase our productivity. Assembler languages evolved to 3rd generation languages (3GL) like C, C++ and Java. 4GL languages like
PowerBuilder and Visual Basic are even higher level and more productive. Some people have discussed 5GLs (although the definition of that varies widely). And now we discuss 6GLs
(also here).</p>
<p>Platforms, frameworks and design patterns all allow us to work at “higher
levels of abstractions”. Rules engines, business process designers and service oriented architecture (SOA) are some current examples with a similar claim. UML, domain specific languages (DSLs), model driven
development (MDD) and Model Driven Architecture (MDA)
also “raises the level of abstraction”.</p>
<p>But “raising the levels of abstraction” does not describe
what should be the real aspiration in software development. Taken to the
extreme, at a very high level of abstraction, we could simply draw a box and
say that is our system. Obviously a box is at such a high level of abstraction
that it is completely useless! More importantly, higher levels of abstraction
are not always what we need. For example, higher level tools like the 4GLs are often
rejected because they do not allow enough control at lower levels of
abstraction.</p>

<p>It is not only for programming itself that we benefit from working
at the appropriate level of abstraction. Other participants in software
projects, like subject
matter experts, most certainly work at a level of abstraction different from
the programmer. An earlier
blog essay described how subject matter experts can participate more
effectively in software projects. They can participate at their own comfort
level, their own preferred level of abstraction, while the result can be
processed by a computer.</p>
<p>What is the optimum balance for degrees of freedom? The optimum
balance is when the degree of freedom matches exactly the problem we want to
solve. Obviously the optimum balance varies from problem to problem and domain to domain. Each problem
defines what degree of freedom is optimal for that problem. For example, when
choosing how to sort a list, does it matter what algorithm to use? Does it have
to be optimized for time or memory consumption, or maybe both? It obviously depends on
the situation.</p>
<p>Back to our question: “how can we work at the appropriate
level of abstraction at all times”? In other words how can we both eat the cake
and have it too?<br>
Mapping between levels of abstraction is one solution.
Compilers are a perfect example of this. Input is a program at one level of
abstraction, for example Java, and output is the same program at a lower level
of abstraction, Java byte code in this case. <br>
Compilers, however, only allow us to generate a lower level
of abstraction. What if you actually want to work and tweak things at a lower
level of abstraction? Generative
Programming often requires this, at least in some cases. A typical example
is editing a UML model and editing C++ code. Roundtrip engineering, as applied
in many UML tools, is an approach to this. It allows you to do a change at one
level of abstraction, and have that change reflected at the other level of
abstraction. For example, a change in the model causes an update of the code.<br>
Correspondingly, a change in the code leads to a change in the model. 
Unambiguous bi-directional mapping is required to make round
trip engineering work. Since by definition each level of abstraction is different
from each other, extra annotations are often required to map correctly and
completely. To allow any change at more than one level one needs to be able to
map each level of abstraction to elements in the other levels. Since that leads to
redundant information across models
and code, all types of synchronization issues can creep in. You need to be
really careful or have really good tool support to avoid messing up. 
So to be able to work at the appropriate level of abstraction
for each problem, we have to be able to mix multiple levels of abstraction in
an effective way, while minimizing or removing the overhead. Each programming language
gives us a fixed level of abstraction that we can not typically change. <br>Generative
programming can be used to get from one level to another. But to be able to
navigate, generate, map, edit, and display in multiple views, always at the
appropriate level of abstraction and always semantically connected, we need a
new way to both (re)define and integrate different levels of abstraction.    
</p>
<h1>5.4.3 STRUCTURED DESIGN</h1>
<p>
    Structured Analysis and Design Technique (SADT) is a systems engineering and software engineering methodology for describing systems as a hierarchy of functions. SADT is a structured analysis modelling language, which uses two types of diagrams: activity models and data models. It is developed since the late 1960s by Douglas T. Ross, and further formalized and published as IDEF0 in 1981.
</p>
<div class="center"><img class="center" src="Images/f38.png"></div>
<h1>SADT Topics</h1>
<div class="center"><img class="center" src="Images/f39.png"></div>
<p>
    Top down decomposition structure.
</p>
<div class="center"><img class="center" src="Images/f40.png"></div>
<h1>Top down approach</h1>
<p>The structured analysis and design technique uses a decomposition with the top-down approach. This decomposition is conducted only in the physical domain from an axiomatic design viewpoint</p>
<h1>Diagrams</h1>
<p>
    SADT uses two types of diagrams: activity models and data models. It uses arrows to build these diagrams. The SADT’s representation is the following:
</p>
<ul>
    <li>	A main box where the name of the process or the action is specified
    <li>	On the left-hand side of this box, incoming arrows: inputs of the action.
    <li>	On the upper part, the incoming arrows: data necessary for the action.
    <li>	On the bottom of the box, incoming arrows: means used for the action.
    <li>	On the right-hand side of the box, outgoing arrows: outputs of the action.
    <li>	Inputs enter from the left and represent data or consumables that are needed by the activity.
    <li>	Outputs exit to the right and represent data or products that are produced by the activity.
    <li>	Controls enter from the top and represent commands which influence the execution of an activity but are not consumed.
    <li>	Mechanisms identify the means, components or tools used to accomplish the activity. Represents allocation of activities.
    <li>	Inputs are activities that produce the data.
    <li>	Outputs consume the data.
    <li>	Controls influence the internal state of the data.
    <li>	Author or developer of the SADT models
    <li>	Commenters, who review the author's work
    <li>	Readers or users of the SADT models
    <li>	Experts, who can advise the authors
    <li>	Technical committee or reviewers of the SADT models in detail
    <li>	Project librarian, who govern the project documentation
    <li>	Project manager, who governs the system analysis and design.
    <li>	Monitor or chief analyst to assists SADT developers and users
    <li>	Instructor to train SADT developers and users
</ul>
<h1>5.4.5 JACKSON STRUCTURED PROGRAMING</h1>
Jackson structured programming<br>
<div class="center"><img class="center" src="Images/f41.png"></div>
<p>
    Jackson structured programming (JSP) is a method for structured programming based on correspondences between data stream structure and program structure. JSP structures programs and data in terms of sequences, iterations and selections, and as a consequence it is applied when designing a program's detailed control structure, below the level where object-oriented methods become important.[1][2]
</p>
<h1>Structural equivalent</h1>
<p>The JSP version of the program is structurally equivalent to</p>
<pre>
String line;

line = in.readLine();
while (line != null) {
    int count = 0;
    String firstLineOfGroup = line;

    while (line != null && line.equals(firstLineOfGroup)) {
        count++;
        line = in.readLine();
    }
    System.out.println(firstLineOfGroup + " " + count);
}
</pre>
<p>and the traditional version of the program is equivalent to</p>
<pre>
String line;

int count = 0;
String firstLineOfGroup = null;
while ((line = in.readLine()) != null) {
    if (firstLineOfGroup == null
            || !line.equals(firstLineOfGroup)) {
        if (firstLineOfGroup != null) {
            System.out.println(firstLineOfGroup + " " + count);
        }
        count = 0;
        firstLineOfGroup = line;
    }
    count++;
}
if (firstLineOfGroup != null) {
    System.out.println(firstLineOfGroup + " " + count);
}
</pre>
<p>
    Jackson criticises the traditional version, claiming that it hides the relationships which exist between the input lines, compromising the program's understandability and maintainability by, for example, forcing the use of a special case for the first line and forcing another special case for a final output operation.
</p>
<h1>The method</h1>
<p>
    JSP uses semi-formal steps to capture the existing structure of a program's inputs and outputs in the structure of the program itself.
The intent is to create programs which are easy to modify over their lifetime. Jackson's major insight was that requirement changes are usually minor tweaks to the existing structures. For a program constructed using JSP, the inputs, the outputs, and the internal structures of the program all match, so small changes to the inputs and outputs should translate into small changes to the program.<br>
JSP structures programs in terms of four component types:
</p>
<ul>
    <li>	fundamental operations
    <li>	sequences
    <li>	iterations
    <li>	selections
</ul>
<p>The method begins by describing a program's inputs in terms of the four fundamental component types. It then goes on to describe the program's outputs in the same way. Each input and output is modelled as a separate Data Structure Diagram (DSD). To make JSP work for compute-intensive applications, such as digital signal processing (DSP) it is also necessary to draw algorithm structure diagrams, which focus on internal data structures rather than input and output ones.</p>
<p>The input and output structures are then unified or merged into a final program structure, known as a Program Structure Diagram (PSD). This step may involve the addition of a small amount of high level control structure to marry up the inputs and outputs. Some programs process all the input before doing any output, whilst others read in one record, write one record and iterate. Such approaches have to be captured in the PSD.</p>
<p>The PSD, which is language neutral, is then implemented in a programming language. JSP is geared towards programming at the level of control structures, so the implemented designs use just primitive operations, sequences, iterations and selections. JSP is not used to structure programs at the level of classes and objects, although it can helpfully structure control flow within a class's methods.</p>
<p>JSP uses a diagramming notation to describe the structure of inputs, outputs and programs, with diagram elements for each of the fundamental component types.</p>

<div class="center"><img class="center" src="Images/f42.png"></div>

<p>An iteration is again represented with joined boxes. In addition the iterated operation has a star in the top right corner of its box. In the example below, operation A consists of an iteration of zero or more invocations of operation B.</p>
<div class="center"><img class="center" src="Images/f43.png"></div>

<p>Selection is similar to a sequence, but with a circle drawn in the top right hand corner of each optional operation. In the example, operation A consists of one and only one of operations B, C or D.</p>
<div class="center"><img class="center" src="Images/f44.png"></div>
<h1>A worked example</h1>
<p>
    As an example, here is how a programmer would design and code a run length encoder using JSP.<br>
A run length encoder is a program which takes as its input a stream of bytes. It outputs a stream of pairs consisting of a byte along with a count of the byte's consecutive occurrences. Run length encoders are often used for crudely compressing bitmaps.<br>
With JSP, the first step is to describe the structure of a program's inputs. A run length encoder has only one input, a stream of bytes which can be viewed as zero or more runs. Each run consists of one or more bytes of the same value. This is represented by the following JSP diagram.
</p>
<div class="center"><img class="center" src="Images/f45.png"></div>
<p>The second step is to describe the structure of the output. The run length encoder output can be described as zero or more pairs, each pair consisting of a byte and its count. In this example, the count will also be a byte.</p>
<div class="center"><img class="center" src="Images/f46.png"></div>
<p>The next step is to describe the correspondences between the operations in the input and output structures.</p>
<div class="center"><img class="center" src="Images/f47.png"></div>
<p>
    It is at this stage that the astute programmer may encounter a structure clash, in which there is no obvious correspondence between the input and output structures. If a structure clash is found, it is usually resolved by splitting the program into two parts, using an intermediate data structure to provide a common structural framework with which the two program parts can communicate. The two programs parts are often implemented as processes or coroutines.<br>
In this example, there is no structure clash, so the two structures can be merged to give the final program structure.
</p>
<div class="center"><img class="center" src="Images/f48.png"></div>
<p>At this stage the program can be fleshed out by hanging various primitive operations off the elements of the structure. Primitives which suggest themselves are</p>
<ol>
    <li>read a byte
    <li>	remember byte
    <li>set counter to zero
    <li>	increment counter
    <li>	output remembered byte
    <li>	output counter
</ol>
<p>The iterations also have to be fleshed out. They need conditions added. Suitable conditions would be</p>
<ul>
    <li>	while there are more bytes
    <li>	while there are more bytes and this byte is the same as the run's first byte and the count will still fit in a byte
</ul>
<p>
    If we put all this together, we can convert the diagram and the primitive operations into C, maintaining a one-to-one correspondence between the code and the operations and structure of the program design diagram.
</p>

</article>    
<?php
include './footer.php';
?>