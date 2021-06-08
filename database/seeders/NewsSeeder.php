<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = new \App\Models\News([
            'name'=>'INTERNATIONAL CRICKET',
            'type'=>'sports',
            'short_desc'=>'Watch: India will be at a slight disadvantage in the World Test C’ship final, says Yuvraj Singh',

            'description'=>'Yuvraj said Rohit Sharma and Shubman Gill will have to get used to the Dukes ball quickly in their first appearance as openers in England.',
            'content'=>'Former India all-rounder Yuvraj Singh feels the ICC World Test Championship final between India and New Zealand should have been a three-match tie as the current schedule puts Virat Kohli’s men at a “slight disadvantage”.

            The Indian team, which landed in England on Thursday, goes into the game starting June 18 in Southampton with limited preparation time while New Zealand are already playing a two-Test series against hosts England. “I feel in a situation like this, there should be a best of three Tests, because if you lose the first one then you can come back in the next two. India will have a slight disadvantage because New Zealand are already playing Test cricket in England,” Yuvraj told Sports Tak.
            
            “There are 8-10 practice sessions but there’s no substitute for match-practice. It will be an even contest but New Zealand will have an edge,” he said.

            Yuvraj said India have a stronger batting line-up compared to the Kane Williamson-led Black Caps.

            “I do believe India is very strong because lately we have been winning outside the country. I think our batting is stronger, in bowling they are at par,” he said.

            The 2011 World Cup hero said Rohit Sharma and Shubman Gill will have to get used to the Dukes ball quickly in their first appearance as openers in England.',
            'image'=>'https://p.imgci.com/db/PICTURES/CMS/290500/290526.jpg',
            'status'=>'1'
        ]);
        $news->save();
        
        $news = new \App\Models\News([
            'name'=>'CORONAVIRUS CRISIS',
            'type'=>'COVID-19',
            'short_desc'=>'Interview: It’s too soon to say that India’s second Covid-19 wave has ended',

            'description'=>'K Srinath Reddy of the Public Health Foundation of India explains what the country can do to prevent a rise in cases once lockdowns ease.',

            'content'=>'The second wave of Covid-19 is now abating slowly but steadily across India, with both new cases and deaths decreasing. Unfortunately, economic output and the potential for economic growth is also continuing to fall further, hurting tens of millions of Indians across the country. The Center for Monitoring Indian Economy has told IndiaSpend recently that almost 97% of Indians are now poorer thanks to Covid-19.

            In this context, how can we emerge from the various lockdowns in several states and resume economic activity? Given that only about 22.3 crore Indians are partly or fully vaccinated, with the majority (80%) having received only one shot of a Covid-19 vaccine, what are the guardrails we should have in place to unlock?
            
            To understand the precautions we need to keep in mind, and what we should be doing to prepare for a potential third wave, we spoke with K Srinath Reddy, president of the Public Health Foundation of India, adjunct professor of epidemiology at Harvard TH Chan School of Public Health and former president of the World Heart Federation.
            
            Are we really reaching the end of the second wave? Or are we misinterpreting some of these early signs?
            From several indicators, it does appear that the second wave is subsiding. We are seeing the Covid-19 case counts dropping. Despite the challenges in terms of actual testing and interpretation, there is a consistent directional change towards a drop in cases. We are also seeing deaths dropping.

            Again, despite some undercounting, the trend is visible. We are also seeing test positivity rates dropping over a period of time. And, most importantly, we are seeing that hospitals are no longer so crowded with people in intensive care, or waiting outside desperately pleading for admission. So all of these taken together would suggest that we are actually seeing a substantial decrease, at least in the larger cities where the [second] wave started.

            Even in some of the smaller towns, I believe we are now seeing a downward trend. The [situation in the] villages is a little more difficult to gauge because testing is inadequate and our data systems are not good enough, but even there, we are not seeing as many horror stories as we were about two or three weeks ago.',

            'image'=>'https://cdn.vox-cdn.com/thumbor/XStiCvfvqP8Mi_vsXcP9pPaShJw=/0x0:7887x5258/1320x743/filters:focal(3506x2105:4766x3365):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/66549177/GettyImages_1208074931.0.jpg',
            'status'=>'1'
        ]);
        $news->save();
        
        $news = new \App\Models\News([
            'name'=>'CORONAVIRUS CRISIS',
            'type'=>'COVID-19',
            'short_desc'=>'Interview: It’s too soon to say that India’s second Covid-19 wave has ended',

            'description'=>'K Srinath Reddy of the Public Health Foundation of India explains what the country can do to prevent a rise in cases once lockdowns ease.',

            'content'=>'The second wave of Covid-19 is now abating slowly but steadily across India, with both new cases and deaths decreasing. Unfortunately, economic output and the potential for economic growth is also continuing to fall further, hurting tens of millions of Indians across the country. The Center for Monitoring Indian Economy has told IndiaSpend recently that almost 97% of Indians are now poorer thanks to Covid-19.

            In this context, how can we emerge from the various lockdowns in several states and resume economic activity? Given that only about 22.3 crore Indians are partly or fully vaccinated, with the majority (80%) having received only one shot of a Covid-19 vaccine, what are the guardrails we should have in place to unlock?
            
            To understand the precautions we need to keep in mind, and what we should be doing to prepare for a potential third wave, we spoke with K Srinath Reddy, president of the Public Health Foundation of India, adjunct professor of epidemiology at Harvard TH Chan School of Public Health and former president of the World Heart Federation.
            
            Are we really reaching the end of the second wave? Or are we misinterpreting some of these early signs?
            From several indicators, it does appear that the second wave is subsiding. We are seeing the Covid-19 case counts dropping. Despite the challenges in terms of actual testing and interpretation, there is a consistent directional change towards a drop in cases. We are also seeing deaths dropping.

            Again, despite some undercounting, the trend is visible. We are also seeing test positivity rates dropping over a period of time. And, most importantly, we are seeing that hospitals are no longer so crowded with people in intensive care, or waiting outside desperately pleading for admission. So all of these taken together would suggest that we are actually seeing a substantial decrease, at least in the larger cities where the [second] wave started.

            Even in some of the smaller towns, I believe we are now seeing a downward trend. The [situation in the] villages is a little more difficult to gauge because testing is inadequate and our data systems are not good enough, but even there, we are not seeing as many horror stories as we were about two or three weeks ago.',

            'image'=>'https://cdn.vox-cdn.com/thumbor/XStiCvfvqP8Mi_vsXcP9pPaShJw=/0x0:7887x5258/1320x743/filters:focal(3506x2105:4766x3365):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/66549177/GettyImages_1208074931.0.jpg',
            'status'=>'1'
        ]);
        $news->save();
    }
}
