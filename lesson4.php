<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php
            $greeting = '';
            $tasks = [
                'andy' => ['learn php', 'learn css'],
            ];
            for ($i = 1; $i <= 5 ; $i++) {
                $greeting = $greeting . '*';
            }
        ?>
        <style>
            div.card {
                width:300px;
                border:1px dashed green;
                padding:20px;
                margin:20px
            }
            #test {
                
            }
            div.card2 {
                width:300px;
                border:1px dashed red;
                background-color:Lime ;
                padding:20px;
                margin:20px
            }
        </style>
        <link rel="stylesheet" href="main.css">
        <title>Hello Thomas<?php echo $greeting?></title>
    </head>
    <body>
        <h1>Below are my favorite sites:</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/1QQnWcNwYIc" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <img src="https://www.joybusinessacademy.com/images/courses/1002.png" alt="This is my picture">
        <ul>
            <li> <a href="http://trademe.co.nz">http://trademe.co.nz</a> </li>
            <li><a href="https://www.w3schools.com" target=_blank>W3 Schools</a></li>
            <li><a href="http://youtube.com" target=_blank>Youtube</a></li>
            <a href="lesson4.php">Home</a>
    <a href="school.php">My School</a>
    <a href="about.php">About Me</a>
    <p>Hello, this is my school</p>    
        </ul>
        <br>
        <div class="card" id="test">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam commodi reiciendis repellendus nam quasi ducimus, asperiores recusandae voluptas, consequuntur culpa doloribus, voluptatum amet id! Sapiente atque quas esse omnis pariatur!
        </div>
        <div class="card2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In molestias sapiente dicta atque molestiae sequi voluptatum dolor obcaecati dolore aliquid architecto tenetur quas illum possimus est, at ipsa odit blanditiis.
        </div>
       <p>

       </p> 
       <span></span>
        <h2> Header 2 </h2>
        <h3> Header 2 </h3>
        <h6> Header 2 </h6>
        <hr>
        <span>a</span>
        bsdfjskdfjs
        <p style='color:red'>
            $foo $bar $baz 
            John Doe, Jane Doe
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe officiis fugiat itaque! Dolorem, porro, corporis unde impedit nesciunt excepturi odio quisquam ut quibusdam dolor, quia hic cumque nisi at placeat.
            dsdf
            sdkfjskdfj
        </p>
        <div style="">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam doloribus facilis explicabo voluptatem atque dolorum dicta quae, ipsam provident debitis voluptas laborum ducimus. Nulla, a adipisci mollitia sint aut ratione!
        </div>
        <p style="padding:12px solid blue;border:1px solid red">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sed expedita quae, voluptatibus eius officia eligendi modi, dolores blanditiis iste sint voluptatem mollitia? Nemo facilis reprehenderit minus tempora adipisci placeat!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minus minima pariatur doloremque inventore nemo, quidem deleniti delectus omnis sunt dolorem sapiente repudiandae vitae eos libero ullam, cumque blanditiis velit!
            Ab officiis odit provident! Velit quis, praesentium magni odit illo a! Illum iste sequi sunt vero, quo amet animi praesentium autem aut, dolorem laudantium eveniet quis similique perspiciatis itaque consectetur!
            Voluptates molestiae amet fugiat tempora quae et sint quod ratione autem modi libero ad error placeat laboriosam velit corporis, dolores, molestias officiis fugit inventore architecto? Doloribus doloremque tempore obcaecati in.
            Soluta tempore ipsum animi, molestiae nisi deserunt quasi molestias sint, asperiores voluptate saepe omnis, quia quo id ratione quos eaque. Inventore exercitationem aliquam illum porro aut fugiat molestias, ut perspiciatis!
            Ipsum natus nesciunt voluptas expedita optio. Modi praesentium hic libero, porro itaque perspiciatis velit totam quo non repudiandae voluptate, consectetur molestias similique animi at ipsum culpa quas nobis voluptas sit.
            Illum voluptatibus dolore cum quidem architecto odio? Sunt adipisci voluptate dolor veritatis iure mollitia hic, temporibus accusamus deserunt maxime fuga sapiente dolorum ea qui architecto unde id atque eveniet in!
            Error nisi iusto aspernatur maxime, alias autem, quo eaque accusantium dolores quas delectus architecto quisquam beatae nam cupiditate et, sit odio atque? Debitis, atque tempore rerum accusamus id tenetur voluptatibus.
            Quas iusto, quaerat pariatur voluptatum illum doloribus voluptatem inventore ipsum quos exercitationem esse, veniam temporibus magni laboriosam dolor. Consequatur tenetur velit, nihil deserunt culpa minus ad provident hic. Dolor, explicabo.
            Sint quibusdam aut magnam nam et? Ex recusandae tenetur, ducimus suscipit cumque voluptatibus, laudantium sit distinctio error reiciendis aperiam provident nihil voluptate enim voluptatum consectetur? Soluta expedita dignissimos fugit culpa!
            Alias veritatis aut architecto repudiandae optio tempore iusto a, cumque labore dignissimos omnis ipsa exercitationem quaerat nisi illum inventore aliquam quas odit. Molestiae aliquam ab nostrum eveniet, rem quae magni?
        </p>
        <ul>
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
        </ul>
        <ol>
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
        </ol>
        <table style="border:2px solid">
            <thead>
                <tr>
                    <th  style="border:1px solid" colspan=2>Name </th>
                </tr>
                <tr>
                    <th>Name </th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> Thomas </td>
                    <td> 18 </td>
                </tr>
                <tr>
                    <td rowspan=2> Andy</td>
                    <td> 41 </td>
                </tr>
                <tr>
                    <td rowspan=2> 41 </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>