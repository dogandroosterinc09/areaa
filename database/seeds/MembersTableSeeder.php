<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('members')->delete();
        
        \DB::table('members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 14,
                'bio' => 'Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.',
                'position' => 'Realtor',
                'role' => 'AREAA LEADERSHIP ROLE',
                'location' => 'San Diego, CA',
                'company' => 'Company A',
                'language_spoken' => 'English',
                'designations' => 'Lorem Ipsum Elite',
                'area_of_specialty' => 'Lorem Ipsum, Dolor Sup Melis, Vellis Lorem',
                'social_media' => '{"facebook":"fb","instagram":"ig","twitter":"tw"}',
                'badges' => 'public/images/area-list.png,public/images/area-lux.jpg',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2011-04-22 22:10:27',
                'updated_at' => '2020-05-16 07:55:14',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 15,
                'bio' => 'Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.',
                'position' => 'Realtor',
                'role' => '',
                'location' => 'San Diego, CA',
                'company' => 'Company',
                'language_spoken' => 'English, Spanish',
                'designations' => 'Designation',
                'area_of_specialty' => 'Lorem Ipsum, Dolor Sup Melis, Vellis Lorem',
                'social_media' => '{"facebook":"","instagram":"","twitter":""}',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-04-22 22:11:49',
                'updated_at' => '2020-05-16 07:55:51',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 16,
                'bio' => 'Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.',
                'position' => 'Realtor',
                'role' => '',
                'location' => 'Seattle, CA',
                'company' => 'Company',
                'language_spoken' => 'English',
                'designations' => 'Lorem Ipsum Elite',
                'area_of_specialty' => 'Lorem Ipsum, Dolor Sup Melis, Vellis Lorem',
                'social_media' => '',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-04-22 22:13:23',
                'updated_at' => '2020-04-22 22:13:23',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 17,
                'bio' => 'Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.',
                'position' => 'Realtor',
                'role' => '',
                'location' => 'Dallas, TX',
                'company' => 'Company',
                'language_spoken' => 'English',
                'designations' => 'Lorem Ipsum Elite',
                'area_of_specialty' => 'Lorem Ipsum, Dolor Sup Melis, Vellis Lorem',
                'social_media' => '',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-04-22 22:14:14',
                'updated_at' => '2020-04-22 22:14:14',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 18,
                'bio' => '',
                'position' => 'Realtor',
                'role' => '',
                'location' => '',
                'company' => 'Company B',
                'language_spoken' => '',
                'designations' => '',
                'area_of_specialty' => '',
                'social_media' => '',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-04-30 08:58:19',
                'updated_at' => '2020-04-30 08:58:19',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 19,
                'bio' => 'Lorem ipsum dolor sit amet, vivamus vitae ultricies risus, vestibulum vel consectetuer odio natoque, vulputate mauris ut. Ut erat arcu ipsum, pellentesque suscipit arcu et, odit sociosqu nonummy ultrices, odio imperdiet id nunc, velit metus leo. Quam magna dolor eu, velit posuere, dui sagittis est. Cupiditate libero integer, suspendisse dignissim rutrum id tincidunt ea vulputate, sed metus quis suspendisse adipiscing, vestibulum vestibulum ut sagittis neque pulvinar. Lacus luctus semper, nibh feugiat molestie mollis erat amet semper, pede erat arcu, molestie neque ligula at, condimentum elit convallis. Sit fringilla ante massa, amet vulputate elit in vel, nulla massa ligula quam sit fames non, aliquet luctus suspendisse. Mauris dolorum congue, aenean proin, amet nulla platea et sed. Sed neque in neque, quisque justo morbi leo egestas id vehicula, in vestibulum neque eu eu sem, lectus sem velit, molestie elit. Velit mus vestibulum. Massa dui velit. Quisque amet eu in dui et placerat, pellentesque maecenas sed erat sit lectus, suscipit nibh mauris integer consectetuer faucibus, erat wisi cras aliquet pede lectus tortor.',
                'position' => 'Realtor',
                'role' => '',
                'location' => 'San Diego',
                'company' => 'Dog and Rooster, Inc.',
                'language_spoken' => 'English',
                'designations' => 'Lorem Ipsum Elite, Dolor sup Melis',
                'area_of_specialty' => 'Et Sup Melis, Dolor Herli, Lorem Ipsum Elite',
                'social_media' => '{"facebook":"#","instagram":"","twitter":""}',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-01 00:29:20',
                'updated_at' => '2020-05-18 17:41:05',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 20,
                'bio' => '',
                'position' => 'Realtor',
                'role' => '',
                'location' => '',
                'company' => 'Company A',
                'language_spoken' => '',
                'designations' => '',
                'area_of_specialty' => '',
                'social_media' => '',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-05 01:41:53',
                'updated_at' => '2020-05-05 01:41:53',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 3,
                'bio' => '',
                'position' => '',
                'role' => '',
                'location' => '',
                'company' => '',
                'language_spoken' => '',
                'designations' => '',
                'area_of_specialty' => '',
                'social_media' => '',
                'badges' => '',
                'is_active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-05 01:41:53',
                'updated_at' => '2020-05-05 01:41:53',
            ),
        ));
        
        
    }
}