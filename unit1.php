<?php
include './header1.php';
?>
<article id="front_article">
    <h3>[1] Planning a Software</h3>
    <span class="chnav">
        <span class="lnav">
            <!--a id="normal_link" href="#">Previous</a-->&nbsp;
        </span>
        <span class="rnav">
            <a id="normal_link" href="unit2.php">Next</a>
        </span>
    </span>
    <h4>[1.1] Size Factor</h4>
    <p>
        Software sizing is an activity in software engineering that is used to estimate the size of a software application or component in order to be able to implement other software project management activities (such as estimating or tracking). Size is an inherent characteristic of a piece of software just like weight is an inherent characteristic of a tangible material.
    </p>
    <h1>Total Effort Devoted to Software</h1>
    <div class="left">
        Software development effort estimation is the process of predicting the most realistic amount of effort (expressed in terms of person-hours or money) required to develop or maintain software based on incomplete, uncertain and noisy input. Effort estimates may be used as input to project plans, iteration plans, budgets, and investment analyses, pricing processes and bidding rounds.
    </div>
    <div class="right"><img src="Images/devvsmaint.jpg"></div>
    <p>
        A major goal of software engineering is to provide tools and techniques to increase the productivity of the available software engineers.
    </p>
    <h1>Changing Ratio of Expenditures for Hardware and Software Overtime</h1>
    <table class="wfifty">
        <thead>
            <tr>
                <th>YEAR</th>
                <th>RATIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1960</td>
                <td>80% hardware cost to 20% software cost</td>                
            </tr>
            <tr>
                <td>1980</td>
                <td>20% hardware cost to 80% software cost</td>                
            </tr>
            <tr>
                <td>1990</td>
                <td>90% of amount spent on computing system</td>                
            </tr>            
        </tbody>
    </table>
    <div class="center"><img class="center" src="Images/deveffortchart.jpg"></div>
    <table class="weighty twocol">
        <thead>
            <tr>
                <th colspan="4">Project Size Categories</th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    <div class="bold">Project Size Assessment</div>
                    <span>
                        Categorize the size of the project based on the effort days equivalent, using the following ranges.
                    </span>
                </td>
                <td colspan="2">
                    Size (i.e., small, medium, large, very large, extra large, mega)
                </td>
            </tr>
            <tr>
                <th>Small</th>
                <td>1 - 1,000 effort days equivalent </td>
                <th>VeryLarge</th>
                <td>7,001 - 40,000 effort days equivalent </td>
            </tr>
            <tr>
                <th>Medium</th>
                <td>1,001 - 2,500 effort days equivalent </td>
                <th>ExtraLarge</th>
                <td>40,001 -85,000 effort days equivalent </td>
            </tr>
            <tr>
                <th>Large</th>
                <td>2,501 - 7,000 effort days equivalent</td>
                <th>Mega</th>
                <td>85,001 + effort days equivalent</td>
            </tr>
        </tbody>
    </table>
    <h1>Trivial Project</h1>
    <p>
A tivial project involve one programer working perhaps part time for a few days  and few weeks and result ina program of less then 500 statements packed in 10 and 20 subroutiens.
    </p>
    <h1>Small Project</h1>
    <p>
        A small project for one programmer for 1 to 6 months and product containg 1000 to 2000 lines and perhaps 25 to 50 routines.
        <br>
        Examples: scientific application, numerical problem
    </p>
    <h1>Medium project</h1>
    <p>
        A project requries two to five programmmers  working for one to two year and product containing 10,000 to 50,000 line code and perhaps in 250 to 1000 routines.
        <br>Example: compilers and inventory system and management system.

    </p>
    <h1>Large project</h1>
    <p>
        It requries 5 to 20 programmer for a period of 2 to 3 years and line coding is 50,000 to 1,000,000 and packed in several system.
        <br>Example: large compiler and graphics programms.
        <br>Ver 3 years and line coding is 50,000 to 1,000,000 and packed in several system.
        <br>Example: large compiler and graphics programms.
    </p>
    <h1>Very large project</h1>
    <p>
        It requries 100 to 1000 programmer for a period of 4 to 5 years and line coding is  1million and packed in several system  and sub systems.
        <br>Example: real time processing and tele communication.
    </p>
    <h1>Extremely large project</h1>
    <p>
        It requries 2000 to 5000 programmer for a period of upto 10years and line coding is  1million to 10 millions  and packed in several system  and very large sub systems.
        <br>Example:Multitasking, telecommunication.
    </p>
    <h1>Defining the problem</h1>
    <ul class="outer">
        <li>Before spending time trying to solve a programming problem, it is essential that your first understand the problem to be solved.</li>
        <ul class="inner">
            <li>read, read, read</li>
            <li>ask questions</li>
            <li>clarify anything you are not sure of</li>
            <li>try writing the problem in your own words</li>
            <li>produce an input processing output chart</li>
        </ul>
        
        <li>Designing a solution</li>
        <ul class="inner">
            <li>Once the problem is understood, the next step is to design a solution for the problem</li>
            <li>This usually involves breaking the problem into smaller pieces and producing an algorithm for each piece.</li>
            <li>An algorithm is a step by step process that needs to be followed in order to solve a problem.</li>            
        </ul>
        
        <li>Testing the design</li>
        <ul class="inner">
            <li>Once the solution has been designed, it is important to check that the deigned solution actually solves the problem</li>
            <li>This involves performing a desk check of each algorithm.</li>
            <li>A desk check may involve using test input data and working through each algorithm using this test input.</li>            
        </ul>
        
        <li>Implementing the solution</li>
        
        <li>Testing the solution</li>
        <ul class="inner">
            <li>Once the solution has been written the new program needs to be tested</li>
            <li>A bank of test input should be used to test every conceivable input into the program</li>
            <li>The test result should be recorded and appropriately documented</li>            
        </ul>
        
        <li>Documenting the solution</li>
        <ul class="inner">
            <li>Of extreme importance is the proper documentation of program you produce</li>
            <li>Program documentation may consist of source code comments user manuals, installation guides etc</li>
            <li>Proper documentation is important because it assists other people in understanding and using your program.</li>            
        </ul>
    </ul>
    
    <div class="center"><img class="center" src="Images/apparchstandards.jpg"></div>
    
    <h1>Waterfall Model design or phased model</h1>
    <p>
        Waterfall approach was first SDLC Model to be used widely in Software Engineering to ensure success of the project. In "The Waterfall" approach, the whole process of software development is divided into separate phases. In Waterfall model, typically, the outcome of one phase acts as the input for the next phase sequentially.
<br>Following is a diagrammatic representation of different phases of waterfall model
    </p>
    <div class="center"><img class="center" src="Images/waterfall.jpg"></div>
        The sequential phases in Waterfall model are
        <br>
    <ul>
        <li>Requirement Gathering and analysis: All possible requirements of the system to be developed are captured in this phase and documented in a requirement specification doc.</li>
        <li>System Design: The requirement specifications from first phase are studied in this phase and system design is prepared. System Design helps in specifying hardware and system requirements and also helps in defining overall system architecture.</li>
        <li>Implementation: With inputs from system design, the system is first developed in small programs called units, which are integrated in the next phase. Each unit is developed and tested for its functionality which is referred to as Unit Testing.</li>
        <li>Integration and Testing: All the units developed in the implementation phase are integrated into a system after testing of each unit. Post integration the entire system is tested for any faults and failures.</li>
        <li>Deployment of system: Once the functional and non functional testing is done, the product is deployed in the customer environment or released into the market. </li>
        <li>Maintenance: There are some issues which come up in the client environment. To fix those issues patches are released. Also to enhance the product some better versions are released. Maintenance is done to deliver these changes in the customer environment. </li>
    </ul>
        <p>
            All these phases are cascaded to each other in which progress is seen as flowing steadily downwards (like a waterfall) through the phases. The next phase is started only after the defined set of goals are achieved for previous phase and it is signed off, so the name "Waterfall Model". In this model phases do not overlap. 
        </p>
        <h1>Waterfall Model Application</h1>
        <p>
            Every software developed is different and requires a suitable SDLC approach to be followed based on the internal and external factors. Some situations where the use of Waterfall model is most appropriate are
        </p>
        <ul>
            <li>Requirements are very well documented, clear and fixed.</li>
            <li>Product definition is stable.</li>
            <li>Technology is understood and is not dynamic.</li>
            <li>There are no ambiguous requirements.</li>
            <li>Ample resources with required expertise are available to support the product.</li>
            <li>The project is short.</li>
        </ul>
        <h1>Waterfall Model Pros & Cons</h1>
        <h2>Advantage</h2>
        <p>
            The advantage of waterfall development is that it allows for departmentalization and control. A schedule can be set with deadlines for each stage of development and a product can proceed through the development process model phases one by one.
            <br>
            Development moves from concept, through design, implementation, testing, installation, troubleshooting, and ends up at operation and maintenance. Each phase of development proceeds in strict order.
        </p>
        <h2>Disadvantage</h2>
        <p>
            The disadvantage of waterfall development is that it does not allow for much reflection or revision. Once an application is in the testing stage, it is very difficult to go back and change something that was not well-documented or thought upon in the concept stage.
        </p>
</article>    
<?php
include './footer.php';
?>