<?php
include './header5.php';
?>
<article id="front_article">
    <h3>[5] VERIFICATION AND VALIDATION TECHNIQUIES AND SOFTWARE MAINTENANCE</h3>
    <span class="chnav">
        <span class="lnav">
            <a id="normal_link" href="unit4.php">Previous</a>
        </span>
        <span class="rnav">
            <!--a id="normal_link" href="#">Next</a-->&nbsp;
        </span>
    </span>
    <h4>Integration testing</h4>
    <p>
        Integration testing (sometimes called integration and testing, abbreviated I&T) is the phase in software testing in which individual software modules are combined and tested as a group. It occurs after unit testing and before validation testing. Integration testing takes as its input modules that have been unit tested, groups them in larger aggregates, applies tests defined in an integration test plan to those aggregates, and delivers as its output the integrated system ready for system testing.
    </p>
    <h4>Big Bang</h4>
    <p>In this approach, all or most of the developed modules are coupled together to form a complete software system or major part of the system and then used for integration testing. The Big Bang method is very effective for saving time in the integration testing process. However, if the test cases and their results are not recorded properly, the entire integration process will be more complicated and may prevent the testing team from achieving the goal of integration testing.</p>
<p>A type of Big Bang Integration testing is called Usage Model testing. Usage Model Testing can be used in both software and hardware integration testing. The basis behind this type of integration testing is to run user-like workloads in integrated user-like environments. In doing the testing in this manner, the environment is proofed, while the individual components are proofed indirectly through their use. Usage Model testing takes an optimistic approach to testing, because it expects to have few problems with the individual components. The strategy relies heavily on the component developers to do the isolated unit testing for their product. The goal of the strategy is to avoid redoing the testing done by the developers, and instead flesh-out problems caused by the interaction of the components in the environment. For integration testing, Usage Model testing can be more efficient and provides better test coverage than traditional focused functional integration testing. To be more efficient and accurate, care must be used in defining the user-like workloads for creating realistic scenarios in exercising the environment. This gives confidence that the integrated environment will work as expected for the target customers.
</p>
<h4>Top-down and Bottom-up</h4>
<p>
    Bottom Up Testing is an approach to integrated testing where the lowest level components are tested first, then used to facilitate the testing of higher level components. The process is repeated until the component at the top of the hierarchy is tested.
</p>
<p>
    All the bottom or low-level modules, procedures or functions are integrated and then tested. After the integration testing of lower level integrated modules, the next level of modules will be formed and can be used for integration testing. This approach is helpful only when all or most of the modules of the same development level are ready. This method also helps to determine the levels of software developed and makes it easier to report testing progress in the form of a percentage.
</p>
<p>
    Top Down Testing is an approach to integrated testing where the top integrated modules are tested and the branch of the module is tested step by step until the end of the related module.
</p>
<p>
    Sandwich Testing is an approach to combine top down testing with bottom up testing.<br>
The main advantage of the Bottom-Up approach is that bugs are more easily found. With Top-Down, it is easier to find a missing branch link
</p>
<div class="center"><img class="center" src="Images/f49.png" width="500px"></div>

    <h1>8.6.2 ACCEPTENCE TESTING </h1>    
    <p>
        Acceptance testing involves planning and execution of functional test,performance test,and streee test in odtter to demonstrate that the implemented system satisfies its requirement.tools of special importance during acceptance testing includes a test coverage analyzer ,and acoding standard checker.
    </p>
    <p>
        In engineering and its various subdisciplines, acceptance testing is a test conducted to determine if the requirements of a specification or contract are met. It may involve chemical tests, physical tests, or performance tests.
    </p>
    <p>
        In systems engineering it may involve black-box testing performed on a system (for example: a piece of software, lots of manufactured mechanical parts, or batches of chemical products) prior to its delivery.
    </p>
    <p>
        Software developers often distinguish acceptance testing by the system provider from acceptance testing by the customer (the user or client) prior to accepting transfer of ownership. In the case of software, acceptance testing performed by the customer is known as user acceptance testing (UAT), end-user testing, site (acceptance) testing, or field (acceptance) testing.
    </p>
    <p>
        A smoke test is used as an acceptance test prior to introducing a build to the main testing process.<br>
        User acceptance testing (UAT) consists of a process of verifying that a solution works for the user.It is not system testing (ensuring software does not crash and meets documented requirements), but rather is there to ensure that the solution will work for the user i.e. test the user accepts the solution (software vendors often refer to as Beta testing).<br>
        This testing should be undertaken by a subject-matter expert (SME), preferably the owner or client of the solution under test, and provide a summary of the findings for confirmation to proceed after trial or review. In software development, UAT as one of the final stages of a project often occurs before a client or customer accepts the new system. Users of the system perform tests in line with what would occur in real life scenario.
        <br>
        The UAT acts as a final verification of the required business functionality and proper functioning of the system, emulating real-world usage conditions on behalf of the paying client or a specific large customer. If the software works as required and without issues during normal use, one can reasonably extrapolate the same level of stability in production.<br>
        User tests, usually performed by clients or by end-users, do not normally focus on identifying simple problems such as spelling errors and cosmetic problems, nor showstopper defects, such as software crashes; testers and developers previously identify and fix these issues during earlier unit testing, integration testing, and system testing phases.
        <br>
        UAT should be executed against test scenarios. Test scenarios usually differ from System or Functional test cases in the sense that they should represent a "player" or "user" journey. The broad nature of the test scenario ensures that the focus is on the journey and not technical or system specific key presses, staying away from "click by click" test steps to allow for a variance in users steps through systems. Test scenarios created can be broken down into logical "days", which are usually where the actor (player/customer/operator) system (back office, front end) changes.
        <br>
        In the industrial sector, a common UAT is a factory acceptance test (FAT). This test takes place before installation of the concerned equipment. Most of the time testers not only check if the equipment meets the pre-set specification, but also if the equipment is fully functional. A FAT usually includes a check of completeness, verification against contractual requirements, a proof of functionality (either by simulation or a conventional function test) and a final inspection.
        <br>
        The results of these tests give confidence to the client(s) as to how the system will perform in production. There may also be legal or contractual requirements for acceptance of the system.
    </p>
    
    <ul>
        <li>Done after delivery of product
        <li>Activities:
            <ul>
                <li>Enhancement (Analysis Phase)
                    <ul><li>Add new functional capabilities
                        <li>Improve user displays
<li>Improve user interface
<li>Upgrade internal & external documents
<li>Upgrade performance characteristics</ul></ul><ul>
<li>Adaptation <ul>
<li>Moving to new environment</ul></ul><ul>
<li>Correction (Analysis, design or implementation)
    <ul>
<li>Modification & revalidation    
    </ul>            
<li>Qualitative - clarity, modularity, ...
    </ul>
    </ul>
    <h1>Enhancing maintainability during development</h1>
    
    <ul>
        <li>Analysis Activities:
            <ul><li>Development
                    <ul><li>Determine customer needs & constraints
                        <li>Establish feasibility</ul>
                <li>Maintenance
                    <ul><li>Establish standards & guidelines
                        <li>Setting of milestones
                        <li>Specify quality assurance procedures
                        <li>Estimate resources</ul>
                <li>Done by customer or 3rd party org. or developing org.
                <li>Customer gives estimates
            </ul>
        <li>Standards & Guidelines:
            <ul><li>Formats & Standards for: (Quality Assurance Group)
                    <ul><li>Requirements documents
                        <li>Design specifications
                        <li>Structured coding conventions
                        <li>Test plan
                        <li>Principles of operation
                        <li>Installation manual
                        <li>Users manual</ul>
                <li>Managers – check milestones are met, documents developed on schedule
            </ul>   
        <li>Design Activities:
            <ul><li>Architectural Design
                    <ul><li>Emphasize clarity, modularity & easy modification</ul>
                <li>Detailed Design
<ul><li>Prepare Call graph & cross-reference directory to indicate scope of effect of each routine</ul>
            </ul>               
        <li>Implementation Activities:
            <ul><li>Ease of maintenance – Data encapsulation, table sizes & overflow tracks.
                <li>Standard prologues – author name, development date, maintenance person name, date & purpose of modification
            </ul>
        <li> Supporting documents:
            <ul><li>Maintenance guide description
                    <ul><li>Operational capabilities
                        <li>Hierarchy diagrams
                        <li>Call graphs & cross-reference directory
                    </ul>
                <li>Test suite description – delivered product
                    <ul><li>File of test cases – integration & acceptance testing
                        <li>Set of test data & actual results
                        <li>Rerun test suite & document again
                    </ul>
    </ul></ul>
    <h1>Managerial aspects of software maintenance</h1>
    <pre>
Managerial skills + Technical skills
Software change request initiated
Request analysed
If (request not valid) then
	- request closed
Else
	- request & recommendations submitted to change control board
	if (change control board concurs) then
		- modifications performed with priority & contraints by board
		- regression test performed
		- changes submitted to board
		if (board approves) then
			- master tape updated
			- external doc. updated
			- update distributed
		else
			- board objections satisfied & changes resubmitted
	else
		- request closed
    </pre>
    <ul>
        <li>Change request initiated by users
        <li>First reviewed by analyst – user problem, system problem
<li>Analyst submits to control board – change request, proposed fix, resource estimation
<li>Request initiator – ANALYST – Change control board
<li>Change control board:
    <ul><li>High-level manager team
<li>Shielding of maintenance programmer from 
<li>Reviews & approves
<li>Deny request/ Recommend modified version of change/ Approve change
<li>Approved changes – maintenance person
<li>Software is modified and resubmitted to board
<li>Approved – documents & master tapes updated & distributed to user
    </ul>
<li>Change Request summaries
    <ul><li>Emergency problems & temporary fixes
        <li>Old open requests with status of progress & closing date
<li>Change Request summary, Maintenance trends summary documents
<li>Trends summary
    <ul><li>Stmt of maintenance workload
<li>New and open error corrections requests
    </ul>
    </ul>
<li>Quality Assurance Activities
    <ul><li>Software quality does not degrade
<li>Conduct audits & spot checks
<li>Check the structure & internal documentation of source code not destroyed
<li>Monitors change requests
<li>Prepares change request summaries
<li>Performs regression test
<li>Provides configuration management plan
    <ul><li>Software products to be controlled
<li>Specifies mechanism of change control
<li>Reports changed status
<li>Versions 
    </ul>
<li>Change control board is administered by QA group
    </ul>
<li>Organising maintenance programmers:
    <ul><li>Development Team
        <li>Advantages:
            <ul><li>Familiar
<li>Design specifications are clear
<li>Great care to design and implement
            </ul>
        <li>Disadvantages
            <ul><li>Less careful
<li>Boring
<li>Get stuck in dead-end task
            </ul>
        <li>Maintenance Team
            <ul><li>Advantages
<li>More interesting and more rewarding
            </ul>
        <li>Disadvantages
            <ul><li>Slippage
<li>Rotating programmers
            </ul>
    </ul>
<li>Novice programmers can learn
    <ul><li>Without getting stuck
<li>High-quality source code
<li>Great care
<li>Appreciation of skills
<li>Greater flexibility
<li>Less stigma
<li>Overall improvement in personnel experience
    </ul>
    </ul>
    <h1>Configuration management</h1>
    <ul>
        <li>Tracking and controlling of work products
        <li>During development – milestones & reviews
<li>After development – work products are under configuration control
    <ul><li>Baselined or benchmarked work products
<li>Changes made after - Formal sign-off approval from customer & developer org.
    </ul>    
<li>Tools
    <ul><li>Configuration Management DBs
        <li>Version control library systems
    </ul>
<li>Configuration management databases:
    <ul><li>Product structure, current revision number, current status, & change request history.
<li>How many versions of each product exists?
<li>How do the versions differ?
    </ul>
<li>Version control libraries:
    <ul><li>Part of Configuration management databases or stand-alone tool
<li>Configuration Management DB – macro view of product family

<li>VCL – controls various files that consititute many versions
<li>Not a DB

<li>Entities – source code, relocatable object code, job control commands, data files and supporting documents.

<li>Each entity carry identity stamp – version no, date, time, & programmer identity

<li>Operations – creation of library, addition & deletion of components, preparation of back-up copies, editing of files, listing of summary statistics, & compilation and assembly of versions

<li>Eg. Revision control System (RCS) – treats all files as text
    <ul><li>Feature – Access control Mechanism
<li>Locked while checking is done by one user
    </ul>
    </ul>
    <h1>SOURCE CODE METRICS</h1>
    <ul>
        <li>Metrics – measure complexity of source code
        <li>Metrics:
            <ul><li>no. of operators & operands, 
                <li>complexity of control flow, 
<li>no. of parameters & global variables, 
<li>no. of levels & no. of interconnections
            </ul>
        <li>Measures considers factors:
            <ul><li>Computing environment
<li>Application area
<li>Implemented alg.
<li>Level of reliability & efficiency
            </ul>
        <li>Software complexity measure before & after modification
            <ul><li>Quality does not degrade
<li>Does not increase complexity
            </ul>
    </ul>
    <h1>Halstead's Effort equation</h1>
    <ul>
        <li>Metrices – calculated using properties of source code
            <ul><li>Total no. of operators in program, N1
<li>Total no. of operands in program, N2
<li>no. of unique operators in program, n1
<li>no. of unique operands in program, n2
    <ul>
<li>Length N = N1 + N2
<li>Halstead’s estimator of program length:
    <ul><li>N = n1 log2 n1 + n2 log2 n2</ul>
<li>Program volume:
    <ul><li>V = (N1 + N2) log2 (n1 + n2)</ul>
<li>Level of language abstraction:
    <ul><li>L = (2 * n2) / (n1 * N2)</ul>
<li>Program effort: V/ L
    <ul><li>E = (n1 * N2 * (N1 + N2) * log2 (n1 + n2) / (2 * n2)</ul>
<li>Application - detecting similarity programs
    </ul>
            </ul>
    </ul>
    <pre>
Ex:
	SUBROUTINE ADD (A,N)
	DIMENSION A(N)
	Sum = 0
	DO I = 1, N
		Sum = Sum + A(I)
	CONTINUE
	RETURN
	END
</pre>
    <table style="width:80%;margin:auto;">
<tr><th>Operand 	<th>count      <th>Operator <th>count
<tr><td>A	<td>1	<td>1. End of Stmt		<td>4
<tr><td>N	<td>1	<td>2. Array subscript	<td>1
<tr><td>Sum<td>	2<td>	3. =<td>		3
<tr><td>I<td>	2<td>	4. +<td>		1
<tr><td>1<td>	1<td>	5. ,<td>	1
<tr><td>6. DO<td>	7. END<td>	1<td>1

<tr><td>N1 = 12<td>N2 = 7<td>n1 = 7<td>	n2 = 5
    </table>
    <h1>Mccabe's cyclomatic metric</h1>
    <ul>
        <li>Difficulty of program - Complexity of control flow graph
            <ul><li>V - cyclomatic number
                <li>G - Connected graph
<li>V(G) = E - n + 2p
<li>Dashed line - connecting output node to input node for connected graph
<li>Single entry, single exit - V = no of predicates + 1
G is planar, V = no of regions in G
<li>Maximum complexity = 10, 3 - 7 = well-structured</ul>
<li>During implementation - identify further refinement, rewriting
<li>During maintenance - track & control complexity level

    </ul>   

</article>    
<?php
include './footer.php';
?>