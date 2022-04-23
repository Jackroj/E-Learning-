<?php
include './header3.php';
?>
<article id="front_article">
    <h3>[3] Software Requirements and Definitions</h3>
    <span class="chnav">
        <span class="lnav">
            <a id="normal_link" href="unit2.php">Previous</a>
        </span>
        <span class="rnav">
            <a id="normal_link" href="unit4.php">Next</a>
        </span>
    </span>
    <h4>[1.1] The software requirement specification</h4>
    <p>
        In computer science, formal specifications are mathematically based techniques whose purpose are to help with the implementation of systems and software. They are used to describe a system, to analyze its behavior, and to aid in its design by verifying key properties of interest through rigorous and effective reasoning tools.These specifications are formal in the sense that they have a syntax, their semantics fall within one domain, and they are able to be used to infer useful information.
    </p>
    <p>Given such a specification, it is possible to use formal verification techniques to demonstrate that a system design is correct with respect to its specification. This allows incorrect system designs to be revised before any major investments have been made into an actual implementation. Another approach is to use provably correct refinement steps to transform a specification into a design, which is ultimately transformed into an implementation that is correct by construction.</p>
<p>It is important to note that a formal specification is not an implementation, but rather it may be used to develop an implementation. Formal specifications describe what a system should do, not how the system should do it.</p>
<p>A good specification must have some of the following attributes: adequate, internally consistent, unambiguous, complete, satisfied, minima
</p>
A good specification will have:
<ul>
    <li>	Constructability, manageability and evolvability
    <li>	Usability
    <li>	Communicability
    <li>	Powerful and efficient analysis
</ul>
<p>
    One of the main reasons there is interest in formal specifications is that they will provide an ability to perform proofs on software implementations. These proofs may be used to validate a specification, verify correctness of design, or to prove that a program satisfies a specification.
</p>

    <h1>Limitations</h1>
    <p>
        A design (or implementation) cannot ever be declared “correct” on its own. It can only ever be “correct with respect to a given specification”. Whether the formal specification correctly describes the problem to be solved is a separate issue. It is also a difficult issue to address, since it ultimately concerns the problem constructing abstracted formal representations of an informal concrete problem domain, and such an abstraction step is not amenable to formal proof. However, it is possible to validate a specification by proving “challenge” theorems concerning properties that the specification is expected to exhibit. If correct, these theorems reinforce the specifier's understanding of the specification and its relationship with the underlying problem domain. If not, the specification probably needs to be changed to better reflect the domain understanding of those involved with producing (and implementing) the specification.
Formal methods of software development are not widely used in industry. Most companies do not consider it cost-effective to apply them in their software development processes. This may be for a variety of reasons, some of which are:
    </p>
    <ul>
        <li>	Time 
            <ul>
                <li>High initial start up cost with low measurable returns
            </ul>
        <li>	Flexibility 
            <ul><li>	A lot of software companies use agile methodologies that focus on flexibility. Doing a formal specification of the whole system up front is often perceived as being the opposite of flexible. However, there is some research into the benefits of using formal specifications with "agile" development
                </li></ul>
          <li>	Complexity 
<ul><li>	They require a high level of mathematical expertise and the analytical skills to understand and apply them effectively
    <li>	A solution to this would be to develop tools and models that allow for these techniques to be implemented but hide the underlying mathematics
</ul>
                    <li>	Limited scope
<ul><li>	They do not capture properties of interest for all stakeholders in he project
    <li>	They do not do a good job of specifying user interfaces and user interaction
    <li>	Not cost-effective 
</ul><li>	This is not entirely true, by limiting their use to only core parts of critical systems they have shown to be cost-effective
                </ul>
    Other limitation:
    <ul>
        <li>	Isolation
        <li>	Low-level ontologies
        <li>	Poor guidance
        <li>	Poor separation of concerns
        <li>	Poor tool feedback
    </ul>
    
    <h1>Relational Notation</h1>    
    <p>In mathematics, an implicit equation is a relation of the form R(x1,..., xn) = 0, where R is a function of several variables (often a polynomial). For example, the implicit equation of the unit circle is  </p>
    <p>
        An implicit function is a function that is defined implicitly by an implicit equation, by associating one of the variables (the value) with the others (the arguments).[1]:204–206 Thus, an implicit function for the unit circle might be defined implicitly by  . This implicit equation defines f as a function of x only if -1 ≤ x ≤ 1 and one considers only non-negative (or non-positive) values for the values of the function.
    </p>
    <p>
        The implicit function theorem provides conditions under which a relation defines an implicit function.
    </p>
    <h1>Inverse functions</h1>
    <p>
A common type of implicit function is an inverse function. If f is a function, then the inverse function of f, called f−1, is the function giving a solution of the equation
    </p>
<div class="center"><img class="center" src="Images/f1.png"></div>
<p>for y in terms of x. This solution is</p>
<div class="center"><img class="center" src="Images/f2.png"></div>
<p>Intuitively, an inverse function is obtained from f by interchanging the roles of the dependent and independent variables. Stated another way, the inverse function gives the solution for y of the equation</p>
<div class="center"><img class="center" src="Images/f3.png"></div>

Examples.
<ol>
    <li>	The natural logarithm ln(x) gives the solution y = ln(x) of the equation x − ey = 0 or equivalently of x = ey. Here f(y) = ey and f−1(x) = ln(x).
    <li>The product log is an implicit function giving the solution for y of the equation x − y ey = 0.
</ol>
<p>
Algebraic functions<br>
An algebraic function is a function that satisfies a polynomial equation whose coefficients are themselves polynomials. For example, an algebraic function in one variable x gives a solution for y of an equation
</p>
<div class="center"><img class="center" src="Images/f4.png"></div>
<p>where the coefficients ai(x) are polynomial functions of x. Algebraic functions play an important role in mathematical analysis and algebraic geometry. A simple example of an algebraic function is given by the unit circle equation:</p>
<div class="center"><img class="center" src="Images/f5.png"></div>
<p>
    Solving for y gives an explicit solution:</p>
<div class="center"><img class="center" src="Images/f6.png"></div>
<p>But even without specifying this explicit solution, it is possible to refer to the implicit solution of the unit circle equation.<br>
While explicit solutions can be found for equations that are quadratic, cubic, and quartic in y, the same is not in general true for quintic and higher degree equations, such as
</p>
<div class="center"><img class="center" src="Images/f7.png"></div>
<p>
    Nevertheless, one can still refer to the implicit solution y = g(x) involving the multi-valued implicit function g.</p>
<h1>Algebraic axioms</h1>
<ul>
    <li>Mathematical systems are defined by axioms.
    <li>Axioms specify the fundamental properties and additional properties of a system.
    <li>Valid mathematical system -> the set of axioms must be complete and consistent.
    <li>No axioms can be derived from another.
</ul>
<div>
    Uses
    <ul>
        <li>Specifies the functional properties of a s/w system.
        <li>Specify ADT .(Abstract data types).
        <li>Data abstraction -> emphasize the imp.-> Suppress the unimp.
    </ul>
</div>
<p>Algebraic specification of LIFO Properties.Syntax:</p>
    <table class="wfifty">
        <thead>
            <tr>
                <th>Operation</th>
                <th>Domain</th>
                <th>Range</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NEW</td>
                <td>()</td>                
                <td>STACK</td>
            </tr>
            <tr>
                <td>PUSH</td>
                <td>(STACK,ITEM)</td>                
                <td>STACK</td>
            </tr>
            <tr>
                <td>POP</td>
                <td>(STACK)</td>                
                <td>STACK</td>
            </tr>
            <tr>
                <td>TOP</td>
                <td>(STACK)</td>                
                <td>ITEM</td>
            </tr>
            <tr>
                <td>EMPTY</td>
                <td>(STACK)</td>                
                <td>BOOLEAN</td>
            </tr>
        </tbody>
    </table>
<h1>Definitions of Stack Function behaviour</h1>
<table class="wfifty">
        <thead>
            <tr>
                <th>Terms</th>
                <th>LIFO</th>
                <th>FIFO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Constructors</td>
                <td>NEW, PUSH</td>                
                <td>NEW, ADD</td>
            </tr>
            <tr>
                <td>Modifiers</td>
                <td>POP</td>
                <td>Remove</td>
            </tr>
            <tr>
                <td>Behaviours</td>
                <td>TOP,EMPTY</td>
                <td>FRONT,EMPTY</td>
            </tr>
        </tbody>
</table>
<p>Axioms:<br>
<ul>
    <li>	EMPTY(NEW)			=	true
    <li>	EMPTY(PUSH(stk,itm))		=	false
    <li>	POP(NEW)				=	error
    <li>	TOP(NEW)				=	error
    <li>	POP(PUSH(stk,itm))		=	stk
    <li>	TOP(PUSH(stk,itm))		=	itm
</ul>
</p>

Axioms in English:<br>
<ul>
    <li>	A new stack is empty.
    <li>	A stack is not empty immediately after pushing an item onto it.
    <li>	Attempting to pop a new stack results in an error.
    <li>	There is no top item on a new stack.
    <li>	Pushing an item onto a stack & immediately popping it off leaves the stack unchanged.
    <li>	Pushing an item onto a stack & immediately requesting the top item returns the item just pushed onto the stack.
</ul>
<p>
    Definition of stack function behavior:<br>
	NEW<br>
&nbsp;&nbsp;&nbsp;Purpose:	create  a new stack<br>
&nbsp;&nbsp;&nbsp;Exception:	memory-full = true<br>
&nbsp;&nbsp;&nbsp;Effects:	valid _stack(NEW) = true<br>
				Number_items(NEW) = 0<br>
	
EMPTY(stk)<br>
&nbsp;&nbsp;&nbsp;Purpose:	test stk for empty property<br>
&nbsp;&nbsp;&nbsp;Exception:	‘valid _stack(stk)’ = false<br>
&nbsp;&nbsp;&nbsp;Effects:	if ‘number_items(stk)’ = 0 then true else false.<br>

	PUSH(stk,item)<br>
&nbsp;&nbsp;&nbsp;Purpose:	Place item on stack.<br>
&nbsp;&nbsp;&nbsp;Exception:	‘valid _stack(stk)’ = false<br>
				number_items(stk) = MAX<br>
&nbsp;&nbsp;&nbsp;Effects:	if ‘number_items(stk)’ = MAX then error<br>
&nbsp;&nbsp;&nbsp;		Else ‘number_items(stk) = ‘number_items(stk)’ + 1<br>
	
POP(stk)<br>
&nbsp;&nbsp;&nbsp;Purpose:	Delete top item from stack.<br>
&nbsp;&nbsp;&nbsp;Exception:	‘valid _stack(stk)’ = false<br>
&nbsp;&nbsp;&nbsp;		number_items(stk) = 0<br>
&nbsp;&nbsp;&nbsp;Effects:	if ‘number_items(stk)’ = 0 then error<br>
&nbsp;&nbsp;&nbsp;		Else {stk = ‘stk’ – top(stk)<br>
number_items(stk) = ‘number_items(stk)’ – 1}<br>

TOP(stk)<br>
&nbsp;&nbsp;&nbsp;Purpose:	return a copy of top item on stk.<br>
&nbsp;&nbsp;&nbsp;Exception:	‘valid _stack(stk)’ = false<br>
&nbsp;&nbsp;&nbsp;		‘number_items(stk)’ = 0<br>
&nbsp;&nbsp;&nbsp;Effects:	if ‘number_items(stk)’ = 0 then error<br>
&nbsp;&nbsp;&nbsp;			Else number_items(stk) = ‘number_items(stk)’<br>

FIFO:<br>
&nbsp;&nbsp;&nbsp;Algebraic specification of FIFO Property:<br>

</p>
	Axioms:<br>
        <ul>
            <li>EMPTY(NEW)			=	true
            <li>EMPTY(ADD(que,itm))		=	false
            <li>FRONT(NEW)			=	error
            <li>REMOVE(NEW)			=	error
            <li>FRONT(ADD(que,itm))		=	if EMPTY(que) then itm else FRONT(que)
            <li>REMOVE(ADD(que,itm))	=	if EMPTY(que) then NEW else ADD(REMOVE(que),itm)
        </ul>
        <h1>REGULAR EXPRESSION</h1>
        <p>
            In theoretical computer science and formal language theory, a regular expression (abbreviated regex or regexp) and sometimes called a rational expression[1][2] is a sequence of characters that forms a search pattern, mainly for use in pattern matching with strings, or string matching, i.e. "find and replace"-like operations. The concept arose in the 1950s, when the American mathematician Stephen Kleene formalized the description of a regular language, and came into common use with the Unix text processing utilities ed, an editor, and grep (global regular expression print), a filter.</p>
        <p>
Each character in a regular expression is either understood to be a metacharacter with its special meaning, or a regular character with its literal meaning. Together, they can be used to identify textual material of a given pattern, or process a number of instances of it that can vary from a precise equality to a very general similarity of the pattern. The pattern sequence itself is an expression that is a statement in a language designed specifically to represent prescribed targets in the most concise and flexible way to direct the automation of text processing of general text files, specific textual forms, or of random input strings.</p>
        <p> 
A very simple use of a regular expression would be to locate the same word spelled two different ways in a text editor, for example the regular expression seriali[sz]e matches both "serialise" and "serialize". A wildcard match can also achieve this, but wildcard matches differ from regular expressions in that wildcards are more limited in what they can pattern (having fewer metacharacters and a simple language-base). A usual context of wildcard characters is in globbing similar names in a list of files, whereas regular expressions are usually employed in applications that pattern-match text strings in general. For example, the regexp ^[ \t]+|[ \t]+$ matches excess whitespace at the beginning or end of a line. An advanced regexp used to match any numeral is ^[+-]?(\d+\.?\d*|\.\d+)([eE][+-]?\d+)?$. See Examples for more examples.

        </p>
    <div class="center"><img class="center" src="Images/f8.png"></div>
    <p>Translating the Kleene star "s*": "zero or more of s".</p>
    <p>A regular expression processor translates a regular expression into a nondeterministic finite automaton (NFA), which is then made deterministic and run on the target text string to recognize substrings that match the regular expression. The picture shows the NFA scheme N(s*) obtained from the regex s*, where s denotes a simpler regex in turn, which has already been recursively translated to the NFA N(s).</p>
    <p>Regular expressions are so useful in computing that the various systems to specify regular expressions have evolved to provide both a basic and extended standard for the grammar and syntax; modern regular expressions heavily augment the standard. Regular expression processors are found in several search engines, search and replace dialogs of several word processors and text editors, and in the command lines of text processing utilities, such as sed and AWK.</p>
    <p>
        Many programming languages provide regular expression capabilities, some built-in, for example Perl, JavaScript, Ruby, AWK, and Tcl, and others via a standard library, for example .NET languages, Java, Python and C++ (since C++11). Most other languages offer regular expressions via a library.
    </p>
    <h1>RECURRENCE RELATION</h1>
    <p>"Difference equation" redirects here. It is not to be confused with differential equation.</p>
<p>In mathematics, a recurrence relation is an equation that recursively defines a sequence or multidimensional array of values, once one or more initial terms are given: each further term of the sequence or array is defined as a function of the preceding terms.</p>
<p>The term difference equation sometimes (and for the purposes of this article) refers to a specific type of recurrence relation. However, "difference equation" is frequently used to refer to any recurrence relation.</p>
<p>An example of a recurrence relation is the logistic map:</p>
<div class="center"><img class="center" src="Images/f9.png"></div>
<p>with a given constant r; given the initial term x0 each subsequent term is determined by this relation.
</p>
<p>
    Some simply defined recurrence relations can have very complex (chaotic) behaviours, and they are a part of the field of mathematics known as nonlinear analysis.
Solving a recurrence relation means obtaining a closed-form solution: a non-recursive function of n.
</p>
<p>
    The Fibonacci numbers are the archetype of a linear, homogeneous recurrence relation with constant coefficients (see below). They are defined using the linear recurrence relation
</p>
<div class="center"><img class="center" src="Images/f10.png"></div>
with seed values,
<div class="center"><img class="center" src="Images/f11.png"></div>
<p>Explicitly, recurrence yields the equations:</p>
<div class="center"><img class="center" src="Images/f12.png"></div>
<p>It can be solved by methods described below yielding the closed-form expression, which involves powers of the two roots of the characteristic polynomial t2 = t + 1; the generating function of the sequence is the rational function</p>
<div class="center"><img class="center" src="Images/f13.png"></div>
<p>
    Binomial coefficients<br>
A simple example of a multidimensional recurrence relation is given by the binomial coefficients  , which count the number of ways of selecting i out of a set of n elements. They can be computed by the recurrence relation
</p>
<div class="center"><img class="center" src="Images/f14.png"></div>
<p>with the base cases  . Using this formula to compute the values of all binomial coefficients generates an infinite array called Pascal's triangle. The same values can also be computed directly by a different formula that is not a recurrence, but that requires multiplication and not just addition to compute:  </p>
<div class="center"><img class="center" src="Images/f15.png"></div>
<h1>4.2.2 STATE ORIENTED NOTATION</h1>
<h5>Path expression</h5>
<ul>
    <li>It is based on regular expression.
<li>Used for sequencing of operations in concurrent systems.
<li>Interface dialogues.
<li>Command = (Command_String)* Delimiter
<li>Command_String= Name ws+ (Options ws+ )* Param_List
<li>Options= '-' option (ws+ '-' Option)*
<li>Param_List=Name(ws+ Name)*
<li>Name=Letter(Letter|Digit)*
<li>Delimiter=EOL
<li>Ws=' '
</ul>
<h5>State - Oriented notations</h5>
<ul>
    <li>The state of the system.
<li>It is the information required to summarize the state of system entities at any particular point in time.
<li>Current time and current stimuli  next state.
<li>Includes:
<li>Decision table
<li>Event table
<li>Transition table
<li>Finite - state mechanisms
<li>Petri nets.
</ul>
<h5>Limited - entry decision table</h5>
<div class="center"><img class="center" src="Images/tab1.png" width="400px"></div>
<h5>Ambiguous decision table</h5>
<div class="center"><img class="center" src="Images/tab2.png" width="400px"></div>
<h5>An incomplete and over specified decision table</h5>
<div class="center"><img class="center" src="Images/tab3.png" width="400px"></div>
<h5>2D event table</h5>
<div class="center"><img class="center" src="Images/tab4.png" width="400px"></div>
<h5>Transition table</h5>
<div class="center"><img class="center" src="Images/tab5.png" width="400px"></div>
<h5>Transition Diagram</h5>
<div class="center"><img class="center" src="Images/f17.png" width="400px"></div>
<h5>Network of Data Streams and Process</h5>
<div class="center"><img class="center" src="Images/f18.png" width="400px"></div>
<h5>Specification of split process</h5>
<div class="center"><img class="center" src="Images/f19.png" width="400px"></div>
<h5>Aspects of petri nets</h5>
<div class="center"><img class="center" src="Images/f20.png" width="300px" height="400px"></div>
<h5>Deadlock</h5>
<div class="center"><img class="center" src="Images/f21.png" width="500px"></div>
<h5>Conflict situation</h5>
<div class="center"><img class="center" src="Images/f22.png" width="500px"></div>
<h5>PSA</h5>
<div class="center"><img class="center" src="Images/f23.png" width="500px"></div>
<h1>4.3.1 RSL/REV</h1>
RSL
<ul>
    <li>Requirements Statement Language
<li>Developed by TRW Defense & space systems.
<li>To permit concise, unambiguous specification of requirements for real time systems.
</ul>
REVS
<ul>
    <li>Requirements Engineering Validation System
    <li>It processes and analyzes the RSL/statement.
</ul>
<ul>
    <li>4 primitive concepts:
        <ul>
            <li>	1.ElementsObjects
	<li>	2.AttributesElements
	<li>	3.Relationshipsbinary relations between rel.
	<li>	4.Structurecomposed of nodes and processing 						steps.
<li>Eg.
<li>		Element  Data
<li>		AttributeInitial value
<li>		Relationship between a data 		item& Processing steps		input

</ul>
        <h5>Characteristic of RSL</h5>
        <ul>
            <li>Flow oriented approach ->used to describe real time system.
<li>Models the stimulus response nature of process control sys.
<li>Each flow originates with a stimulus & continues to final response.
<li>Requirement in these fasion make explicit processing step.
        </ul>
        <h5>STRUCTURED ANALYSIS AND DESIGN TECNIQUE (SADT)</h5>
        <p>"SADT" redirects here. For other uses, see SADT (disambiguation).</p>
        
<div class="center"><img class="center" src="Images/f24.png"></div>    
<p>Structured Analysis and Design Technique (SADT) is a systems engineering and software engineering methodology for describing systems as a hierarchy of functions. SADT is a structured analysis modelling language, which uses two types of diagrams: activity models and data models. It is developed since the late 1960s by Douglas T. Ross, and further formalized and published as IDEF0 in 1981.
</p>
<p>
Top down approach<br>
The structured analysis and design technique uses a decomposition with the top-down approach. This decomposition is conducted only in the physical domain from an axiomatic design viewpoint.[7]
</p>

<p>
Diagrams<br>
SADT uses two types of diagrams: activity models and data models. It uses arrows to build these diagrams. The SADT's representation is the following:
</p>
<ul>
    <li>	A main box where the name of the process or the action is specified
    <li>	On the left-hand side of this box, incoming arrows: inputs of the action.
    <li>	On the upper part, the incoming arrows: data necessary for the action.
    <li>	On the bottom of the box, incoming arrows: means used for the action.
    <li>	On the right-hand side of the box, outgoing arrows: outputs of the action.
</ul>
<p>The semantics of arrows for activities:[2]</p>
<ul>
    <li>	Inputs enter from the left and represent data or consumables that are needed by the activity.
    <li>	Outputs exit to the right and represent data or products that are produced by the activity.
    <li>	Controls enter from the top and represent commands which influence the execution of an activity but are not consumed.
    <li>	Mechanisms identify the means, components or tools used to accomplish the activity. Represents allocation of activities.
</ul>
<div class="center"><img class="center" src="Images/f25.png"></div>
<h5>STRUCTURED SYSTEM ANALYSIS (SSA)</h5>
<p>
Structured Analysis (SA) in software engineering and its allied technique, Structured Design (SD), are methods for analyzing and converting business requirements into specifications and ultimately, computer programs, hardware configurations and related manual procedures.
Structured analysis and design techniques are fundamental tools of systems analysis, and developed from classical systems analysis of the 1960s and 1970s
</p>
<div class="center"><img class="center" src="Images/f26.png"></div>
<h5>Single abstraction mechanism</h5>
<div class="center"><img class="center" src="Images/f27.png"></div>
<p>Structured analysis typically creates a hierarchy employing a single abstraction mechanism. The structured analysis method can employ IDEF (see figure), is process driven, and starts with a purpose and a viewpoint. This method identifies the overall function and iteratively divides functions into smaller functions, preserving inputs, outputs, controls, and mechanisms necessary to optimize processes. Also known as a functional decomposition approach, it focuses on cohesion within functions and coupling between functions leading to structured data.</p>
<p>The functional decomposition of the structured method describes the process without delineating system behavior and dictates system structure in the form of required functions. The method identifies inputs and outputs as related to the activities. One reason for the popularity of structured analysis is its intuitive ability to communicate high-level processes and concepts, whether single system or enterprise levels. Discovering how objects might support functions for commercially prevalent object-oriented development is unclear. In contrast to IDEF, the UML is interface driven with multiple abstraction mechanisms useful in describing service-oriented architectures (SOAs)</p>
<div class="center"><img class="center" src="Images/f28.png"></div>
</article>    
<?php
include './footer.php';
?>