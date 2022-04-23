<?php
include './header2.php';
?>
<article id="front_article">
    <h3>[2] Software Cost Estimation</h3>
    <span class="chnav">
        <span class="lnav">
            <a id="normal_link" href="unit1.php">Previous</a>
        </span>
        <span class="rnav">
            <a id="normal_link" href="unit3.php">Next</a>
        </span>
    </span>
    <h4>[1.1] Software cost factors</h4>
    <h1>PROGRAMMER ABILITY</h1>
    <p>
        The goal was to determine the relative influence of batch and time shared access on programmer productivity.12experienced programmer were each given two programming problems to solve, some using batch facilities and some using time sharing. The resulting differences in individual performance among the programmers were much greater then could be attributed to the relatively small effect of batch or time share machine access. the  differences between best and worst performance were factor of 6 to 1 in program size,8 to 1 in execution time.
    </p>
    <h1>PRODUCT COMPLEXTY</h1>
    <div class="left">
        The types of software products
        <ol>
            <li>Application program-includes data processing and scientific programs
            <li>Utility program-includes compilers, linkage editor, and inventory systems
            <li>System program-data base management system, operating system and real time system.
            <li>Level of product complexity is 1:3:9.
            <li>Programmer cost for the software product can be obtained by multiplying the effect in the programmer months by the cost per programmer-month.
            <li>In Boehm terminology, the three levels of product complexity of organic semidetached and embedded program. These levels roughly correspond to application program, utility and system programs.
        </ol>
    </div>
    <div class="right"><img src="Images/Picture4.jpg" width="300px"></div>
    <p>
        <pre>
            Application programs: PM=2.4*(KDSI)**1.05
            Utility programs:            PM=3.0*(KDSI)**1.12
            System programs:       PM+3.6*(KDSI)**1.20
            The development time of a program
            Application programs: TDEV=2.5*(PM)**.38
            Utility programs:       TDEV=2.5*(PM) **.38
            System programs:       TDEV=2.5*(PM) **.38
        </pre>
    </p>
    <h1>DELPHI COST ESTIMATION</h1>
    <p>
        The Delphi technique was developed at the rand corporation in 1948 to gain expert consensus without introducing the adverse side effects of group meetings (HEL66).
    </p>
    <ol>
        <li>A coordinator provides each estimator with the system definition documents and from for recording a cost estimate.
        <li>Estimator studies the definition and completes their estimate anonymously. They may ask question of the coordinator, but they do not discuss their estimate with one another.
        <li>The coordinator prepares and distributes a summary of the estimator response, and includes any unusual rationales noted by the estimators.
        <li>Estimators complete another estimator, again anonymously, using the results from the previous estimate. Estimators whose estimates differ sharply from the group may be asked, anonymously, to private justification for their estimates.
        <li>The process is iterated for as many round as required. No group discussion is allowed during the entire process.
    </ol>
    <p>
        The following approach is a variation on the standard Delphi technique that increases communication while preserving anonymity:
    </p>
    <ol>
        <li>The coordinator provides each estimator with system definition and an estimation form.
        <li>The estimation studies the definition, and the coordinator calls a group meeting. So that estimators can discuss issues with the coordinator and one another.
        <li>Estimators complete their estimates anonymously.
        <li>The coordinators prepare a summary of the estimates, but do not record any relation ales.
        <li>The coordinator calls a group meeting to focus on issues where the estimates vary widely.
        <li>Estimators complete another estimate, again anonymously. The process is iterated for rounds as necessary.
    </ol>
    <div class="center"><img src="Images/Picture5.jpg" width="300px"></div>
    <h1>WORK BREAKDOWN STRUCTURE</h1>
    <p>
        A work breakdown structure (WBS), in project management and systems engineering, is a deliverable-oriented decomposition of a project into smaller components.
A work breakdown structure element may be a product, data, service, or any combination thereof. A WBS also provides the necessary framework for detailed cost estimating and control along with providing guidance for schedule development and control.
WBS is a hierarchical and incremental decomposition of the project into phases, deliverables and work packages. It is a tree structure, which shows a subdivision of effort required to achieve an objective; for example a program, project, and contract.[2] In a project or contract, the WBS is developed by starting with the end objective and successively subdividing it into manageable components in terms of size, duration, and responsibility (e.g., systems, subsystems, components, tasks, subtasks, and work packages) which include all steps necessary to achieve the objective.
    </p>    
    <div class="center"><img src="Images/Picture6.jpg" width="300px"></div>
    <p>The work breakdown structure provides a common framework for the natural development of the overall planning and control of a contract and is the basis for dividing work into definable increments from which the statement of work can be developed and technical, schedule, cost, and labor hour reporting can be established.[2]</p>
    <p>A work breakdown structure permits summing of subordinate costs for tasks, materials, etc., into their successively higher level “parent” tasks, materials, etc. For each element of the work breakdown structure, a description of the task to be performed is generated.[3] This technique (sometimes called a system breakdown structure [4]) is used to define and organize the total scope of a project.</p>
    <p>The WBS is organized around the primary products of the project (or planned outcomes) instead of the work needed to produce the products (planned actions). Since the planned outcomes are the desired ends of the project, they form a relatively stable set of categories in which the costs of the planned actions needed to achieve them can be collected. A well-designed WBS makes it easy to assign each project activity to one and only one terminal element of the WBS. In addition to its function in cost accounting, the WBS also helps map requirements from one level of system specification to another, for example a requirements cross reference matrix mapping functional requirements to high level or low level design documents.</p>
    <p>The development of the WBS normally occurs that the start of a project and proceeds detail project and task planning.
<div class="center"><img src="Images/Picture7.jpg" width="300px"></div>
    <h1>ALGORITHMIC COST MODEL</h1>
    <div class="center"><img src="Images/Picture8.jpg"></div>
    <div class="center"><img src="Images/Picture9.jpg"></div>
    <div class="center"><img src="Images/Picture10.jpg"></div>
    <div class="center"><img src="Images/Picture11.jpg"></div>
    <div class="center"><img src="Images/Picture12.jpg"></div>
    <div class="center"><img src="Images/Picture13.jpg"></div>
    <div class="center"><img src="Images/Picture14.jpg"></div>
    <div class="center"><img src="Images/Picture15.jpg"></div>
</article>    
<?php
include './footer.php';
?>    