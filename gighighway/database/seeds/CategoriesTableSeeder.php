<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => '1920s-bands',
                'guid' => 'ED97CAFE-45E3-4952-91B7-8B764C17536D',
                'name' => '1920s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => '1920s-parties',
                'guid' => '223A1ABE-17F4-495F-A67E-8A79DAA656D0',
                'name' => '1920s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => '1930s-bands',
                'guid' => 'E48EB10A-B3C3-42AF-81B5-36A99D971DEC',
                'name' => '1930s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => '1930s-parties',
                'guid' => '196EFA47-CF5D-4EBD-B84F-4FF157E63FA0',
                'name' => '1930s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => '1940s-bands',
                'guid' => 'A94C7548-D1C4-4776-935D-80C17171B004',
                'name' => '1940s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => '1940s-parties',
                'guid' => '8734CD43-942A-433E-8637-7579FC290F9F',
                'name' => '1940s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => '1950s-bands',
                'guid' => 'F71EDE9A-FA51-4B89-81CA-5205CBA1109C',
                'name' => '1950s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => '1950s-parties',
                'guid' => '4DEE8CD4-0B42-43D8-8A79-4AD045327BFB',
                'name' => '1950s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => '1960s-bands',
                'guid' => '4799798D-0957-4BED-83E8-500B4488D1BE',
                'name' => '1960s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => '1960s-parties',
                'guid' => '6EC2A331-47AC-44F6-A8F0-9078EA9C0EEE',
                'name' => '1960s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => '1970s-bands',
                'guid' => 'F41D811E-FE33-44CB-BD36-49D7F139BC1A',
                'name' => '1970s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => '1970s-parties',
                'guid' => '2D0150D3-A455-46B2-968F-A41C7EBDA14F',
                'name' => '1970s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => '1980s-bands',
                'guid' => '0963215E-50E9-48E7-BE2B-AC5DC3EBF726',
                'name' => '1980s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => '1980s-parties',
                'guid' => 'B708B3C2-D854-40BD-B426-7F1B9498734A',
                'name' => '1980s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => '1990s-bands',
                'guid' => '6DD4A5C7-9F7E-487A-BF9C-DB1170618C31',
                'name' => '1990s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => '1990s-parties',
                'guid' => '665C7073-B0C7-4748-B213-38750033CD60',
                'name' => '1990s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => '2000s-bands',
                'guid' => 'A4AD9A76-4B0A-42A0-BDCC-ACBF128C11EB',
                'name' => '2000s Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => '2000s-parties',
                'guid' => 'C9A51E57-F6B6-4EDF-BE21-486BA2380D23',
                'name' => '2000s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => '40s-hits-piano',
                'guid' => '2146ABDC-D62A-423D-A891-D921B06F3208',
                'name' => '40s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => '50s-hits-acoustic-guitar',
                'guid' => 'EC430DE7-476F-4BAE-914D-03AC790C33CC',
                'name' => '50s Hits Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => '50s-hits-guitar',
                'guid' => 'A8A9B8A4-3DF6-4BB7-BBB4-8273F7DAFF64',
                'name' => '50s Hits Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => '50s-hits-piano',
                'guid' => '37EEC6F6-302A-4223-8B4C-DBBE1FF8CD1C',
                'name' => '50s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => '60s-hits-acoustic-guitar',
                'guid' => '5850D19E-4CB1-49E8-AACB-FEB8CD9D678F',
                'name' => '60s Hits Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => '60s-hits-guitar',
                'guid' => 'E8C740A4-2C4D-4763-AC49-A186A9747247',
                'name' => '60s Hits Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => '60s-hits-piano',
                'guid' => '544AB692-99F2-490A-A19C-AB064FD343D5',
                'name' => '60s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => '60s-singers',
                'guid' => 'C7F7DC6F-385B-457B-9795-5921A56FF6D4',
                'name' => '60s Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => '70s-hits-acoustic-guitar',
                'guid' => '67208AB3-9943-4D38-99D8-632FE01BEB01',
                'name' => '70s Hits Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => '70s-hits-guitar',
                'guid' => '8042E576-6628-4546-B270-7CAEEC730D3C',
                'name' => '70s Hits Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => '70s-hits-piano',
                'guid' => '8BF4351E-11C7-4502-9BF8-684972F44F8B',
                'name' => '70s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => '80s-hits-acoustic-guitar',
                'guid' => 'A206DAC2-B17A-46D6-8671-A81C6D166EFB',
                'name' => '80s Hits Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => '80s-hits-guitar',
                'guid' => '3D692248-4F5B-433D-BCD9-3A6477172CF8',
                'name' => '80s Hits Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => '80s-hits-piano',
                'guid' => '6750580C-D5FE-4003-AA9F-CC4D6AF214F3',
                'name' => '80s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'slug' => '90s-hits-acoustic-guitar',
                'guid' => '0EFA7E07-F9FC-492B-8F77-D333556CA56B',
                'name' => '90s Hits Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'slug' => '90s-hits-guitar',
                'guid' => '92346B6C-F523-48A5-A164-6EC5DC7A1A43',
                'name' => '90s Hits Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'slug' => '90s-hits-piano',
                'guid' => 'AF1D371A-ED11-48F1-9A14-8A458B406781',
                'name' => '90s Hits Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'slug' => 'a-cappella-groups',
                'guid' => '5E5530B4-5D34-4866-A4E3-AD7ACC827E6E',
                'name' => 'A Cappella Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'slug' => 'abba-tribute-groups',
                'guid' => '79F09AB3-9893-42B8-A4E5-7F44CDDB5EAF',
                'name' => 'ABBA Tribute Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'slug' => 'ac-dc-tribute-bands',
                'guid' => 'C1498763-A338-435D-B8C8-EC1A1181E537',
                'name' => 'AC/DC Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'slug' => 'accordion-players',
                'guid' => '388875FC-8637-4038-9E79-8A99446E2968',
                'name' => 'Accordion Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'slug' => 'acoustic-bands',
                'guid' => '9186A6D4-745E-4D2C-BD61-A762941726C3',
                'name' => 'Acoustic Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'slug' => 'acoustic-duos',
                'guid' => '49A8DB4E-9E34-4374-AB7E-A461DB509D8C',
                'name' => 'Acoustic Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'slug' => 'acoustic-guitar',
                'guid' => '9B8713D0-3E99-4E40-829C-064761E09D02',
                'name' => 'Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'slug' => 'acoustic-trios',
                'guid' => 'F5BDA659-8FB6-4EB3-8A1B-43C92F1D0D24',
                'name' => 'Acoustic Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'slug' => 'acrobats',
                'guid' => 'EA623B56-6A92-45CC-9DF8-5DA60290A491',
                'name' => 'Acrobats',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'slug' => 'actors',
                'guid' => 'ED31B4B0-4603-415A-8750-89159832273C',
                'name' => 'Actors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'slug' => 'actresses',
                'guid' => '94A1E0D9-B6A6-4128-BF5E-779193417715',
                'name' => 'Actresses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'slug' => 'adam-lambert-impersonators',
                'guid' => 'B1FF1058-ECF9-407B-BED1-463B2C9E8653',
                'name' => 'Adam Lambert Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'slug' => 'aerialists',
                'guid' => '5358D278-F36B-4FD3-A725-A8899D0BB47E',
                'name' => 'Aerialists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'slug' => 'aerosmith-tribute-bands',
                'guid' => '2D7D41B9-03B5-4931-9739-7FFFB29F0858',
                'name' => 'Aerosmith Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'slug' => 'african-bands',
                'guid' => '6EA7D1A5-CE76-44BF-ACE4-416A19B2CDE2',
                'name' => 'African Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'slug' => 'african-choirs',
                'guid' => 'C390F4A0-4A83-4611-BBBB-407EA164BC55',
                'name' => 'African Choirs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'slug' => 'african-entertainment',
                'guid' => 'DDD08F3A-6333-4D90-8CB3-FA6B8C5EB1F0',
                'name' => 'African Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'slug' => 'airbrush-artists',
                'guid' => 'F1B41039-6C50-4609-99A8-BC5A39854A10',
                'name' => 'Airbrush Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'slug' => 'airbrush-t-shirts',
                'guid' => '7C83740C-453A-462C-9E2C-0D1EE1E8215D',
                'name' => 'Airbrush T-Shirts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'slug' => 'alice-in-chains-tribute-bands',
                'guid' => 'D495F4BF-B6F4-4853-B341-47E259EE5726',
                'name' => 'Alice in Chains Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'slug' => 'allman-brothers-tribute-bands',
                'guid' => '110032DA-9D88-4FC4-8A11-D841A35326DE',
                'name' => 'Allman Brothers Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'slug' => 'alternative-bands',
                'guid' => '56BB875B-7B48-4CA4-BBFF-7C9C11683B4D',
                'name' => 'Alternative Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'slug' => 'alternative-singers',
                'guid' => '95AA4E6F-596A-4E6E-8E7D-5EFB4DF78D75',
                'name' => 'Alternative Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'slug' => 'ambient-acoustic-guitar',
                'guid' => 'BBC9747D-D4AC-453B-B37C-7C862E5FAC8D',
                'name' => 'Ambient Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'slug' => 'ambient-bands',
                'guid' => 'E06072D3-66B3-440A-9707-95E20B07A6EA',
                'name' => 'Ambient Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'slug' => 'ambient-guitar',
                'guid' => 'BF37D9A0-8641-4C81-807F-661C31D9C0BE',
                'name' => 'Ambient Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'slug' => 'ambient-harp',
                'guid' => 'B34A921B-DA41-47E7-A8B6-1B3F746227C0',
                'name' => 'Ambient Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'slug' => 'ambient-piano',
                'guid' => '9969ADF8-75D4-4AD2-B83C-0F696AB63F24',
                'name' => 'Ambient Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'slug' => 'americana-bands',
                'guid' => '9E4EAFCB-C697-4B5E-97A6-E64DDB1C074D',
                'name' => 'Americana Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'slug' => 'americana-duos',
                'guid' => '2AF5AE48-F906-42C1-A263-A72395910A26',
                'name' => 'Americana Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'slug' => 'americana-guitar',
                'guid' => '55B38E74-F152-4589-8A2A-A8F06CA56214',
                'name' => 'Americana Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'slug' => 'americana-singers',
                'guid' => '9D48E62B-28A3-4E0C-B456-E5A3E1C5522B',
                'name' => 'Americana Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'slug' => 'americana-trios',
                'guid' => '2E78D984-E9EF-462F-BA4F-2F8BF21B536A',
                'name' => 'Americana Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'slug' => 'andrea-bocelli-impersonators',
                'guid' => '9F2B1124-8639-459E-AC8C-9CA86E7B90DE',
                'name' => 'Andrea Bocelli Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'slug' => 'andrews-sisters-tribute-shows',
                'guid' => '9A5FEB5B-F378-4676-81D4-D4E3FE6069A0',
                'name' => 'Andrews Sisters Tribute Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'slug' => 'angelina-jolie-impersonators',
                'guid' => '1E759617-57A6-40AF-BB07-1B0997EF5135',
                'name' => 'Angelina Jolie Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'slug' => 'animal-acts',
                'guid' => '68DD61CD-628B-4446-8685-EB2D581F18AB',
                'name' => 'Animal Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'slug' => 'animal-attractions',
                'guid' => '2A959A44-142B-4844-A91B-2E946AD0BA35',
                'name' => 'Animal Attractions',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'slug' => 'animals-for-parties',
                'guid' => '8498AC6D-9722-41D7-B9BD-0A8948DC984B',
                'name' => 'Animals for Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'slug' => 'antique-car-rentals',
                'guid' => '0C8AE2FD-FC41-4714-8F37-6A8CB5004547',
                'name' => 'Antique Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'slug' => 'armonica',
                'guid' => 'F8FD275A-938A-478E-BFDA-03E69EA7CE5C',
                'name' => 'Armonica',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'slug' => 'arnold-schwarzenegger-impersonators',
                'guid' => '02CEBAEC-3716-4309-8328-C3C36F52768B',
                'name' => 'Arnold Schwarzenegger Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'slug' => 'arts-and-crafts-parties',
                'guid' => 'E6EF410F-F6A9-4486-B771-0C089854E1F8',
                'name' => 'Arts and Crafts Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'slug' => 'asian-entertainment',
                'guid' => '169B48AD-A450-45DE-AA5E-C583D8A5D35A',
                'name' => 'Asian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'slug' => 'astrologers',
                'guid' => '1EA1021C-D027-4E81-8665-723D3B7C47CB',
                'name' => 'Astrologers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'slug' => 'auctioneers',
                'guid' => 'C74EFC8E-FDC5-45FB-8029-705B5BC7E12C',
                'name' => 'Auctioneers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'slug' => 'austin-powers-impersonators',
                'guid' => '321BA760-7D91-4997-9724-A9F3E375E1E0',
                'name' => 'Austin Powers Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'slug' => 'australian-entertainment',
                'guid' => 'A6D4317F-23B7-48D9-B254-B6FD5F461626',
                'name' => 'Australian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'slug' => 'author',
                'guid' => 'DCC4BA4F-246A-4180-BBB4-5EBFC6562E93',
                'name' => 'Author',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'slug' => 'avant-garde-bands',
                'guid' => '5840102A-A5CB-4CAB-8D50-410EAFCED633',
                'name' => 'Avant Garde Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'slug' => 'babysitters',
                'guid' => '80913B75-5D08-455B-A50E-F0187FD6AC63',
                'name' => 'Babysitters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'slug' => 'bachelor-party-buses',
                'guid' => 'CF530D4A-FE41-42B3-8FEC-CCA592EE6B83',
                'name' => 'Bachelor Party Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'slug' => 'bachelor-party-limousines',
                'guid' => 'EF3343D8-88A1-434E-AB56-FDD3F5E42ED1',
                'name' => 'Bachelor Party Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'slug' => 'bachelorette-party-buses',
                'guid' => 'A1C7D539-B129-4AE3-ADE8-E82F7B49BDD0',
                'name' => 'Bachelorette Party Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'slug' => 'bachelorette-party-limousines',
                'guid' => '00038CBE-EE66-4824-A03F-51677857A1CF',
                'name' => 'Bachelorette Party Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'slug' => 'backdrops-and-drapes',
                'guid' => 'BD614700-C322-40C6-890D-F34B5B671494',
                'name' => 'Backdrops & Drapes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'slug' => 'bad-company-tribute-bands',
                'guid' => 'AF33AA7C-B78A-428B-A3C9-AC02137C0B61',
                'name' => 'Bad Company Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'slug' => 'bagpipers',
                'guid' => 'C76F3993-CCEB-4B31-B1C3-980224A0A145',
                'name' => 'Bagpipers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'slug' => 'bagpipes',
                'guid' => '3656F22A-CC93-485A-B026-F454AB8AD235',
                'name' => 'Bagpipes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'slug' => 'balancing-acts',
                'guid' => 'F6A78FFE-7302-48B1-BECD-5160A098BD5A',
                'name' => 'Balancing Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'slug' => 'ballet-dancers',
                'guid' => 'AC1D6324-8D78-4CE8-9390-7E19330B48D3',
                'name' => 'Ballet Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'slug' => 'balloon-artists',
                'guid' => 'A1363D1D-E837-4A88-9669-1BADE7134920',
                'name' => 'Balloon Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'slug' => 'balloon-decorations',
                'guid' => 'C1AF0A04-0BA3-4362-A5C1-656D900E58AE',
                'name' => 'Balloon Decorations',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'slug' => 'balloon-twisters',
                'guid' => '53333E35-83AE-43A0-ADC6-AE92A2DE4718',
                'name' => 'Balloon Twisters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'slug' => 'ballroom-dance-music-bands',
                'guid' => '9A45775B-362F-4D3F-9D15-2368922342D3',
                'name' => 'Ballroom Dance Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'slug' => 'ballroom-dancers',
                'guid' => 'D286F0B9-DD22-4756-BA14-5989EDA24FE9',
                'name' => 'Ballroom Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'slug' => 'banjo-players',
                'guid' => 'EFB1D77E-8993-49F7-B6BC-3B964C046ADF',
                'name' => 'Banjo Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'slug' => 'bar-mitzvah-djs',
                'guid' => '2E68D6C4-E7FF-40ED-A445-70D09EC476C8',
                'name' => 'Bar Mitzvah DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'slug' => 'barack-obama-impersonators',
                'guid' => '13A83956-941E-4E9F-9FEB-386777817491',
                'name' => 'Barack Obama Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'slug' => 'barbershop-quartets',
                'guid' => '7A964837-AB75-428E-BE7A-9149DD338BE6',
                'name' => 'Barbershop Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'slug' => 'barbra-streisand-impersonators',
                'guid' => '51BF852D-7216-4FA4-B53D-F6C548B836A3',
                'name' => 'Barbra Streisand Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'slug' => 'barry-white-tribute-acts',
                'guid' => 'D4AA2C36-A3F9-4566-BE0E-BAF460B81731',
                'name' => 'Barry White Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'slug' => 'bartenders',
                'guid' => 'EAF2891E-C59A-4081-AACD-1FEA68405145',
                'name' => 'Bartenders',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'slug' => 'bassists',
                'guid' => 'CA8D76F8-E22A-4012-BAB5-2B2A042A244F',
                'name' => 'Bassists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'slug' => 'beach-bands',
                'guid' => '8CCC6AA0-A157-48FB-AF65-845729CCF591',
                'name' => 'Beach Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'slug' => 'beach-boys-tribute-bands',
                'guid' => '3CAA2D1C-499F-4739-BFE2-11C99C044EC2',
                'name' => 'Beach Boys Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'slug' => 'beach-music-acoustic-guitar',
                'guid' => 'F0CAB3B2-B44A-4C7D-BF0A-BD9AADAC268B',
                'name' => 'Beach Music Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'slug' => 'beach-music-bands',
                'guid' => '85546FFB-4B3A-4390-91C7-6073319ABA21',
                'name' => 'Beach Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'slug' => 'beach-music-guitar',
                'guid' => '864464EC-0577-4DD2-94E3-872C95991980',
                'name' => 'Beach Music Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'slug' => 'beach-music-singers',
                'guid' => '5B0600DA-D253-489D-B426-83D2598A4133',
                'name' => 'Beach Music Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'slug' => 'beatles-tribute-bands',
                'guid' => '0A29BA0F-A8D7-4D90-830E-7FF195882476',
                'name' => 'Beatles Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'slug' => 'beauty-and-style',
                'guid' => 'C3147F68-B687-4D1D-8F81-D50D2718F5D1',
                'name' => 'Beauty and Style',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'slug' => 'belly-dancers',
                'guid' => '31A0CBC8-403A-4C27-A409-53B907364AE2',
                'name' => 'Belly Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'slug' => 'ben-franklin-impersonators',
                'guid' => 'E0B16172-176C-46EA-ADF2-DF0310CECB9A',
                'name' => 'Ben Franklin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'slug' => 'bette-midler-impersonators',
                'guid' => 'BA4F024F-26FB-49D4-A9C6-480EECE1FF1C',
                'name' => 'Bette Midler Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'slug' => 'big-bands',
                'guid' => '5E4A5602-1BAF-44CC-AFE1-EAD1779BEAF7',
                'name' => 'Big Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'slug' => 'big-bands-duos',
                'guid' => '046C276C-2C50-42E2-AB66-992F3036B5D1',
                'name' => 'Big Bands Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'slug' => 'big-bands-piano',
                'guid' => 'EF1AA082-4904-42B8-A276-7C4CEEB55711',
                'name' => 'Big Bands Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'slug' => 'big-bands-singers',
                'guid' => '8905F55A-4590-4924-A057-4F3DAF791372',
                'name' => 'Big Bands Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'slug' => 'big-bands-trios',
                'guid' => '86873E7D-9108-45E6-AEC9-2A9BAA979E96',
                'name' => 'Big Bands Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'slug' => 'bill-clinton-impersonators',
                'guid' => '03D27997-F4B2-4E3B-BF3C-120BE27A1CDE',
                'name' => 'Bill Clinton Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'slug' => 'bill-cosby-impersonators',
                'guid' => '8498E555-E870-471C-99DA-63C129C0F60B',
                'name' => 'Bill Cosby Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'slug' => 'billy-dee-williams-impersonators',
                'guid' => 'B0F1B46F-0995-4FE2-8CE1-C14B50EEA213',
                'name' => 'Billy Dee Williams Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'slug' => 'billy-joel-tribute-acts',
                'guid' => '2C5C4352-CA18-4F76-B58E-4ECC64534144',
                'name' => 'Billy Joel Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'slug' => 'bing-crosby-impersonators',
                'guid' => '6518A1E2-8D8B-48CB-AC21-8E888B7603AE',
                'name' => 'Bing Crosby Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'slug' => 'bird-shows',
                'guid' => '835F966F-826D-4086-A829-598BEB009BC0',
                'name' => 'Bird Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'slug' => 'black-sabbath-tribute-bands',
                'guid' => 'FD167A78-0D0F-4A6B-96F0-60F00EC37AB5',
                'name' => 'Black Sabbath Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'slug' => 'bluegrass-bands',
                'guid' => 'F10B3335-3505-4EC6-9385-93D2F9E7197C',
                'name' => 'Bluegrass Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'slug' => 'bluegrass-duos',
                'guid' => '616269B4-5306-4DCD-A4BF-C2F458F1CD06',
                'name' => 'Bluegrass Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'slug' => 'bluegrass-singers',
                'guid' => '46A7275C-FEF8-4538-8D7E-12AA590CFFF7',
                'name' => 'Bluegrass Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'slug' => 'bluegrass-trios',
                'guid' => '4F60A15C-97BF-459E-8AE2-43FB9DE00377',
                'name' => 'Bluegrass Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'slug' => 'blues-acoustic-guitar',
                'guid' => '85EC89FB-4416-449D-9751-37EA73A720F4',
                'name' => 'Blues Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'slug' => 'blues-bands',
                'guid' => 'DB60A623-3F05-4583-8EAC-4B0EEEA1890C',
                'name' => 'Blues Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'slug' => 'blues-brothers-tribute-bands',
                'guid' => '85B9C901-EA95-45A8-988B-A8D3A78B2A38',
                'name' => 'Blues Brothers Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'slug' => 'blues-brothers-tribute-shows',
                'guid' => 'E3593034-466D-41C4-82D1-9121BAC52A24',
                'name' => 'Blues Brothers Tribute Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'slug' => 'blues-duos',
                'guid' => 'FA90A354-9D5E-4B61-B906-C663E0A2BA73',
                'name' => 'Blues Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'slug' => 'blues-guitar',
                'guid' => '29374496-DC03-4233-962D-FAD30766B354',
                'name' => 'Blues Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'slug' => 'blues-harmonica',
                'guid' => '82A21A4B-3D55-47F5-872D-EE83168A953C',
                'name' => 'Blues Harmonica',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'slug' => 'blues-piano',
                'guid' => '899AF7A7-2685-4C49-B365-BFC6781292B6',
                'name' => 'Blues Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'slug' => 'blues-saxophone',
                'guid' => 'E161FD03-26FD-4409-A2FB-0988D7E60B17',
                'name' => 'Blues Saxophone',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'slug' => 'blues-singers',
                'guid' => 'B93F569D-64C9-4A10-942E-C05BA353D286',
                'name' => 'Blues Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'slug' => 'blues-trios',
                'guid' => '7B4D30BD-C62B-44D9-A653-C0D2D9E3110D',
                'name' => 'Blues Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'slug' => 'bob-hope-impersonators',
                'guid' => 'A32AB048-EDDE-4755-9324-7F5B7BF66F7E',
                'name' => 'Bob Hope Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'slug' => 'bob-marley-tribute-artists',
                'guid' => '1CA64348-1C4A-42B2-953E-F7A1CDCD7B52',
                'name' => 'Bob Marley Tribute Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'slug' => 'bob-marley-tribute-bands',
                'guid' => 'C8ABD890-F648-4309-8E1A-F40206858D5F',
                'name' => 'Bob Marley Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'slug' => 'bob-seger-tribute-acts',
                'guid' => 'EA3CB973-D1FC-4B9D-9B28-228F734D4518',
                'name' => 'Bob Seger Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'slug' => 'body-painters',
                'guid' => '8A1CF32E-8EF3-462E-969F-00AA2D30BB59',
                'name' => 'Body Painters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'slug' => 'body-painting',
                'guid' => '59136C3F-1E93-4F13-9D77-413DD47ADE22',
                'name' => 'Body Painting',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'slug' => 'bolero-bands',
                'guid' => 'C39CAD25-5600-4214-8C93-E4D578E744B5',
                'name' => 'Bolero Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'slug' => 'bollywood-dancers',
                'guid' => 'EC78BDC0-58A8-487A-BD2D-77A13E19C2A5',
                'name' => 'Bollywood Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'slug' => 'bon-jovi-tribute-bands',
                'guid' => 'D4B04F24-D1E9-4038-B409-D92377BFA89F',
                'name' => 'Bon Jovi Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'slug' => 'bossa-nova-bands',
                'guid' => '01CA46C1-F303-4B7C-BFC6-5ECFD655B094',
                'name' => 'Bossa Nova Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'slug' => 'boston-tribute-bands',
                'guid' => 'EDE5DD30-D3FE-469A-B104-5A2C53F6E8C0',
                'name' => 'Boston Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'slug' => 'bounce-houses',
                'guid' => '0A4E3F67-3DF1-410A-BF67-AD51AE1F0437',
                'name' => 'Bounce Houses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'slug' => 'boy-bands',
                'guid' => '913DC46A-2102-4880-B1EA-B712DD8B12B4',
                'name' => 'Boy Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'slug' => 'brass-bands',
                'guid' => 'D3234214-F8C5-427E-BF4E-80E8A494EEA6',
                'name' => 'Brass Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'slug' => 'brass-ensembles',
                'guid' => '57860EB4-69AF-4585-8CDD-6E1897BA5204',
                'name' => 'Brass Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'slug' => 'brass-musicians',
                'guid' => 'EBD0D0E7-1A66-45BE-9C68-7B4BB6405FA4',
                'name' => 'Brass Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'slug' => 'brazilian-acoustic-guitar',
                'guid' => '65A739B8-6A23-4121-83AB-95C0A49F252E',
                'name' => 'Brazilian Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'slug' => 'brazilian-bands',
                'guid' => '176CB71B-AE4E-490D-B901-E2C950AB4AAE',
                'name' => 'Brazilian Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'slug' => 'brazilian-duos',
                'guid' => '51B4F212-52FF-41E1-9E69-09AB5110F95D',
                'name' => 'Brazilian Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'slug' => 'brazilian-entertainment',
                'guid' => '2E6AB636-C43E-4FC1-9A33-779FBFA465C9',
                'name' => 'Brazilian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'slug' => 'brazilian-guitar',
                'guid' => 'D9877ABF-A13F-4023-A603-4F0731EEA7DD',
                'name' => 'Brazilian Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'slug' => 'brazilian-trios',
                'guid' => '128E702D-607C-4C9F-BADF-A85B317640C1',
                'name' => 'Brazilian Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'slug' => 'break-dancers',
                'guid' => 'FAE6C6E5-DE1B-4191-968B-FC69CA7A1C90',
                'name' => 'Break Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'slug' => 'britney-spears-impersonators',
                'guid' => '4F793DC8-F3F6-4EC2-B4F1-82291ABDA049',
                'name' => 'Britney Spears Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'slug' => 'broadway-bands',
                'guid' => '86EAD3F7-E2DC-4601-9FA7-A40BAE156C08',
                'name' => 'Broadway Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'slug' => 'broadway-dueling-pianos',
                'guid' => '9748B696-22C7-4A49-B99D-168B4822A677',
                'name' => 'Broadway Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'slug' => 'broadway-duos',
                'guid' => 'CB0B1965-49D2-4EA7-97ED-43707985EF9E',
                'name' => 'Broadway Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'slug' => 'broadway-harp',
                'guid' => 'B7631AEF-D692-471F-9594-86B5ED325EFF',
                'name' => 'Broadway Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'slug' => 'broadway-piano',
                'guid' => '1FB51927-A2A6-4463-BE51-00CDF0DC2AB4',
                'name' => 'Broadway Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'slug' => 'broadway-singers',
                'guid' => 'BA4464D5-2C62-4735-B742-6E0C387AEBDE',
                'name' => 'Broadway Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'slug' => 'broadway-string-quartets',
                'guid' => 'A571615A-D0A8-46B5-901D-F0AA8F82C878',
                'name' => 'Broadway String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'slug' => 'broadway-trios',
                'guid' => 'DCF6AF66-461B-4ACE-B725-30427BD01407',
                'name' => 'Broadway Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'slug' => 'bruce-springsteen-impersonators',
                'guid' => '5F6DE68C-6279-410F-A4FB-E9D293C09545',
                'name' => 'Bruce Springsteen Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'slug' => 'bubble-entertainment',
                'guid' => '3208A83D-3C99-42A1-AF60-605959263B1B',
                'name' => 'Bubble Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'slug' => 'bubble-parties',
                'guid' => '8ECEC973-F0D3-419E-9D5F-36CEC30DA54D',
                'name' => 'Bubble Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'slug' => 'bubble-trucks',
                'guid' => 'D81F5770-6417-4B05-AC9E-A3BEA8BC5265',
                'name' => 'Bubble Trucks',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'slug' => 'buddy-holly-impersonators',
                'guid' => '50F47807-34DA-4CF4-9721-6D5EB0F8CD04',
                'name' => 'Buddy Holly Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'slug' => 'bugle',
                'guid' => '88843067-5200-4467-BE93-9F5FB0812999',
                'name' => 'Bugle',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'slug' => 'build-a-bear-parties',
                'guid' => '9297EC62-DDB3-48B4-91BE-4BE52715606C',
                'name' => 'Build a Bear Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'slug' => 'burlesque-entertainers',
                'guid' => '8B96D471-96D2-46B0-B6D3-F266C2BA7BC7',
                'name' => 'Burlesque Entertainers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'slug' => 'business-speakers',
                'guid' => '5E415138-6951-41B0-94D2-3FD3203EEC20',
                'name' => 'Business Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'slug' => 'cabaret-bands',
                'guid' => '08214EA9-377E-4DD9-AC0C-E3170707BAB5',
                'name' => 'Cabaret Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'slug' => 'cabaret-dancers',
                'guid' => '35A464F6-0DBA-4700-B00B-067419CAF8B8',
                'name' => 'Cabaret Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'slug' => 'cabaret-duos',
                'guid' => 'BC1C9F64-F8BD-4EA9-B24B-BE484A29D503',
                'name' => 'Cabaret Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'slug' => 'cabaret-groups',
                'guid' => 'FFAAD6A7-6063-4C57-8933-C9F9867E9C3A',
                'name' => 'Cabaret Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'slug' => 'cabaret-piano',
                'guid' => 'BC8F7CFC-77F7-4DB6-AC81-F0DB7C8EDCE1',
                'name' => 'Cabaret Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'slug' => 'cabaret-singers',
                'guid' => '93AB7F26-887D-444A-856F-792EF5A4CEA7',
                'name' => 'Cabaret Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'slug' => 'cabaret-trios',
                'guid' => '17F4B56E-D5C0-403D-96DC-61CDAF96993B',
                'name' => 'Cabaret Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'slug' => 'cadillac-limousines',
                'guid' => '218F8F1B-915C-454F-A0CF-85DE43BC78B8',
                'name' => 'Cadillac Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'slug' => 'cajun-bands',
                'guid' => '38BE071B-C1DF-4799-91D1-EA6254FE8931',
                'name' => 'Cajun Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'slug' => 'cajun-singers',
                'guid' => '13664B80-95C0-4EF8-858A-DAB9A2D0C618',
                'name' => 'Cajun Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'slug' => 'cake-decorators',
                'guid' => '27D1C11B-9B6D-4D7F-9669-F340796B13D8',
                'name' => 'Cake Decorators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'slug' => 'calypso-bands',
                'guid' => '5217CDCA-EE83-4443-A9A3-E801DBB21010',
                'name' => 'Calypso Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'slug' => 'can-can-dancers',
                'guid' => '7BC3B4CC-82CB-41EA-B49C-B70802543419',
                'name' => 'Can Can Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'slug' => 'caribbean-bands',
                'guid' => '05D455A0-0CA5-40BA-8604-4AFD4DD029E7',
                'name' => 'Caribbean Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'slug' => 'caribbean-music-bands',
                'guid' => '69CCE960-055F-4D72-9AEC-F02370FEBD7A',
                'name' => 'Caribbean Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'slug' => 'caribbean-singers',
                'guid' => '75D2240F-1CD9-4853-B695-3586068E6700',
                'name' => 'Caribbean Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'slug' => 'caricaturists',
                'guid' => '213FA9E3-3E05-4284-816E-A0AB4DE85DA0',
                'name' => 'Caricaturists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'slug' => 'carmen-miranda-impersonators',
                'guid' => '31D5DBFF-F477-4B43-9340-C2E1DD49C84C',
                'name' => 'Carmen Miranda Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'slug' => 'carnival-games',
                'guid' => 'D29E015C-E9A8-439E-AF05-CE66EA62E922',
                'name' => 'Carnival Games',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'slug' => 'carnival-rides',
                'guid' => 'EE91E07B-A62A-4FDE-AE2E-6CA9F77175CC',
                'name' => 'Carnival Rides',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'slug' => 'carolers',
                'guid' => '993BCD08-1F9D-44C2-8284-10232A6F4915',
                'name' => 'Carolers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'slug' => 'casino-games',
                'guid' => '05BA1B87-E460-40FB-96EF-4BF2E1BC8A8F',
                'name' => 'Casino Games',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'slug' => 'caterers',
                'guid' => 'EC6283FA-779F-4F83-9A05-A3037917CE0E',
                'name' => 'Caterers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'slug' => 'celebrity-impersonators',
                'guid' => 'A343B6F5-0EDE-4F5F-8BED-4D3C4D58E1D6',
                'name' => 'Celebrity Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'slug' => 'celebrity-speakers',
                'guid' => 'DAF8D21D-542B-40A4-94B1-2C5EA964E545',
                'name' => 'Celebrity Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'slug' => 'celine-dion-impersonators',
                'guid' => '4362B3E3-1706-491F-B54D-95E245F5EEE2',
                'name' => 'Celine Dion Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'slug' => 'cellists',
                'guid' => '08D7C3D8-3F19-4A10-8151-04A4C8354D4C',
                'name' => 'Cellists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'slug' => 'celtic-bagpipes',
                'guid' => '4EEBD501-BEEC-4CEA-9C72-3F6762B9E351',
                'name' => 'Celtic Bagpipes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'slug' => 'celtic-duos',
                'guid' => 'FD714F4F-42FD-4CBE-923F-6DF4975A2E7A',
                'name' => 'Celtic Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'slug' => 'celtic-fiddlers',
                'guid' => '3F62B2EB-072D-4A45-904C-C43F4EC6A354',
                'name' => 'Celtic Fiddlers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'slug' => 'celtic-flute',
                'guid' => '9FDD9AD7-C703-4965-8374-3F8F9B0672E4',
                'name' => 'Celtic Flute',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'slug' => 'celtic-harp',
                'guid' => 'B4961086-120B-494D-93F9-621EAB9C017B',
                'name' => 'Celtic Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'slug' => 'celtic-music',
                'guid' => '84391B13-86D5-468E-991A-2490F565242B',
                'name' => 'Celtic Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'slug' => 'celtic-singers',
                'guid' => '10841EAE-C140-4688-8DA9-A94F8DE18242',
                'name' => 'Celtic Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'slug' => 'celtic-trios',
                'guid' => 'C71C4F5E-F55B-41A2-A03E-1EF7FF6F208F',
                'name' => 'Celtic Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'slug' => 'chamber-music-brass-ensembles',
                'guid' => '92161031-B227-4A8B-9D46-236446C0D365',
                'name' => 'Chamber Music Brass Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'slug' => 'chamber-music-cello',
                'guid' => '33739463-ED33-4229-8BF9-96898D98F43E',
                'name' => 'Chamber Music Cello',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'slug' => 'chamber-music-duos',
                'guid' => 'ABB57843-5A25-45B2-BBC1-BD44576E04BF',
                'name' => 'Chamber Music Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'slug' => 'chamber-music-flute',
                'guid' => '8986D3F7-F87F-4B09-9859-69C7ABBDC128',
                'name' => 'Chamber Music Flute',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'slug' => 'chamber-music-harp',
                'guid' => 'EE23557C-1FDA-437F-885B-0D4AD7FADBC3',
                'name' => 'Chamber Music Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'slug' => 'chamber-music-piano',
                'guid' => '62982EE1-A34C-4E2D-8B06-CE81E8AB8A7C',
                'name' => 'Chamber Music Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'slug' => 'chamber-music-quartets',
                'guid' => '22823E0A-8C26-4E22-B576-AF90925A3E26',
                'name' => 'Chamber Music Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'slug' => 'chamber-music-string-quartets',
                'guid' => '7D9F3216-FC11-4969-9003-232EF712BC31',
                'name' => 'Chamber Music String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'slug' => 'chamber-music-trios',
                'guid' => 'E1D5C510-8C4D-456B-AA90-9FA51A8E4B7F',
                'name' => 'Chamber Music Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'slug' => 'chamber-music-viiolin',
                'guid' => '80E4915C-CDC6-4DE7-AF95-639B7BF4B23B',
                'name' => 'Chamber Music Viiolin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'slug' => 'chamber-music-woodwind-ensembles',
                'guid' => 'E57BE15C-845B-4660-B367-BE21C9A92438',
                'name' => 'Chamber Music Woodwind Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'slug' => 'chamber-orchestras',
                'guid' => '23411483-EAE9-4361-B4EF-541D7113A235',
                'name' => 'Chamber Orchestras',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'slug' => 'characters',
                'guid' => 'E1DB8046-F3EA-4702-8F7C-EA0CF3695824',
                'name' => 'Characters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'slug' => 'charlie-chaplin-impersonators',
                'guid' => '002BDD63-EA34-4B1A-AE29-89CEF3D4B4CE',
                'name' => 'Charlie Chaplin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'slug' => 'chauffeurs',
                'guid' => '02CAB7DF-421A-49C3-84CC-C8528E48D387',
                'name' => 'Chauffeurs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'slug' => 'chefs',
                'guid' => '9306F4FD-EFF6-432C-9B92-2F2F364E7A37',
                'name' => 'Chefs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'slug' => 'cher-impersonators',
                'guid' => '0F6BCD11-0534-4EA7-B23F-48A110017D42',
                'name' => 'Cher Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'slug' => 'chicago-tribute-bands',
                'guid' => 'FC5D15DF-DC11-43D0-8352-7623E6DF4BDA',
                'name' => 'Chicago Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'slug' => 'child-actors',
                'guid' => 'F6EE41B7-AAC6-4A17-B2B6-D8F9EEFE5EE0',
                'name' => 'Child Actors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'slug' => 'child-actresses',
                'guid' => '46925928-BCA3-4D5E-9431-3F53AB647B61',
                'name' => 'Child Actresses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'slug' => 'childrens-choirs',
                'guid' => 'BCFC8889-45F1-4F2C-87A7-00DE0804FB94',
                'name' => 'Children\'s Choirs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'slug' => 'childrens-entertainment',
                'guid' => 'DB53482E-DA90-46C8-A599-93B01714CD91',
                'name' => 'Children\'s Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'slug' => 'childrens-magic',
                'guid' => 'E965E627-1B70-4DD5-A467-300D37FED1FD',
                'name' => 'Children\'s Magic',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'slug' => 'childrens-music',
                'guid' => '029E32B0-E73B-4918-AD11-ECB1A835D1E1',
                'name' => 'Children\'s Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'slug' => 'childrens-music-duos',
                'guid' => '3BDF859A-BDC2-4B2F-B197-10D8B3F74541',
                'name' => 'Children\'s Music Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'slug' => 'childrens-music-piano',
                'guid' => '03EEF594-DD48-4BE4-B96C-4A91BE9E38B5',
                'name' => 'Children\'s Music Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'slug' => 'childrens-music-singers',
                'guid' => 'C03E749E-738F-4C60-A871-224FCCE5EB99',
                'name' => 'Children\'s Music Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'slug' => 'childrens-music-trios',
                'guid' => 'FCBAC6CD-25A6-4AF5-BB37-0A229ABBEE6B',
                'name' => 'Children\'s Music Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'slug' => 'childrens-parties',
                'guid' => '47A45232-AA63-4188-A625-FD1B6774113D',
                'name' => 'Children\'s Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'slug' => 'chocolate-fountains',
                'guid' => '20FE2964-B676-4FF8-B414-A3622B4AC9F0',
                'name' => 'Chocolate Fountains',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'slug' => 'choirs',
                'guid' => 'FE0DA2DB-5FED-48E1-9742-F69D01DB9EE4',
                'name' => 'Choirs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'slug' => 'choral-groups',
                'guid' => '379C017D-BF14-4C96-9747-021580D5CB2E',
                'name' => 'Choral Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'slug' => 'choreographers',
                'guid' => '7C4E0B7F-45FC-4E03-9511-EB6CAD82AE94',
                'name' => 'Choreographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'slug' => 'christian-and-gospel-bands',
                'guid' => '5B21FE48-EE07-4FCD-BCA6-EFF999C1CBBD',
                'name' => 'Christian & Gospel Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'slug' => 'christian-bands',
                'guid' => '313F8AF9-0BFD-4D4A-87DE-A2216794642E',
                'name' => 'Christian Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'slug' => 'christian-comedians',
                'guid' => '5B9FDC70-CDB2-4D80-95FF-68D0A86174ED',
                'name' => 'Christian Comedians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'slug' => 'christian-motivational-speakers',
                'guid' => '5E571122-EDC7-438C-B63B-9E5C8BE09DB8',
                'name' => 'Christian Motivational Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'slug' => 'christian-rappers',
                'guid' => '34191C49-5E77-4E55-9E29-15FD3F0B75FF',
                'name' => 'Christian Rappers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'slug' => 'christian-rock-bands',
                'guid' => '3F2F6DA8-F444-4DBD-96A1-4E69977B3DDB',
                'name' => 'Christian Rock Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'slug' => 'christian-rock-duos',
                'guid' => '677E0E65-98FF-4930-ADF2-9BE3FA090749',
                'name' => 'Christian Rock Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'slug' => 'christian-rock-singers',
                'guid' => 'D34A2F3E-EE40-403A-9865-2553A4A50586',
                'name' => 'Christian Rock Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'slug' => 'christian-rock-trios',
                'guid' => 'B70D3319-3A68-491F-B5BA-8D2A0A5FAFD9',
                'name' => 'Christian Rock Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'slug' => 'christina-aguilera-impersonators',
                'guid' => '9B8B4219-F550-4CC3-B42D-C99CC591D3C3',
                'name' => 'Christina Aguilera Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'slug' => 'christmas-carolers',
                'guid' => '0F149E67-FDCD-4B31-998D-ABBAEF759349',
                'name' => 'Christmas Carolers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'slug' => 'christmas-music-piano',
                'guid' => '82847C04-2809-4DB0-8EDC-FA277F7E7DDD',
                'name' => 'Christmas Music Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'slug' => 'chuck-berry-tributes',
                'guid' => 'C0940E5D-CF0D-4D3A-9826-90DADA5D7BAA',
                'name' => 'Chuck Berry Tributes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'slug' => 'cinematic-videographers',
                'guid' => 'D6CF9B7A-8FFF-416F-BE4D-8F0B0F843935',
                'name' => 'Cinematic Videographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'slug' => 'circus-acts',
                'guid' => '90810BCE-1DF2-4071-83F6-239626A47FF3',
                'name' => 'Circus Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'slug' => 'circus-entertainers',
                'guid' => '3222C6E5-749A-4F0C-BF2B-4B4EEF371981',
                'name' => 'Circus Entertainers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'slug' => 'cirque-circus',
                'guid' => '2B620D14-989B-4725-9809-E8B4F83FA53C',
                'name' => 'Cirque/Circus',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'slug' => 'cirque-performers',
                'guid' => '1BBCE066-C53E-4FEA-A32F-531808751BE7',
                'name' => 'Cirque Performers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'slug' => 'clarinetists',
                'guid' => '4FEA8E2A-8C03-476F-97E4-043DF4E1B062',
                'name' => 'Clarinetists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'slug' => 'clark-gable-impersonators',
                'guid' => '4E85DFAC-21AA-4039-B0B4-6ACEE956B6E5',
                'name' => 'Clark Gable Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'slug' => 'classic-car-rentals',
                'guid' => '4035D292-9495-4E3C-8502-54D8A03F886B',
                'name' => 'Classic Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'slug' => 'classic-rock-bands',
                'guid' => '4CE5A4D7-7912-4010-BBF1-1E194E3585EE',
                'name' => 'Classic Rock Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'slug' => 'classic-rock-duos',
                'guid' => 'B9689614-C50E-4030-A043-8B9BAF14E77E',
                'name' => 'Classic Rock Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'slug' => 'classic-rock-guitar',
                'guid' => 'A85F7354-2F58-4448-9FF0-34471B7971FB',
                'name' => 'Classic Rock Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'slug' => 'classic-rock-singers',
                'guid' => '94FB4714-13F5-485D-A4E3-A7AC3137A73C',
                'name' => 'Classic Rock Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'slug' => 'classic-rock-trios',
                'guid' => 'AB19801D-CA50-41C7-97B5-44FA6B1BA1B3',
                'name' => 'Classic Rock Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'slug' => 'classical-acoustic-guitar',
                'guid' => '873A5760-03CA-47C0-8195-EBA5CB9DBD0B',
                'name' => 'Classical Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'slug' => 'classical-bands',
                'guid' => 'C67DFD02-A3AD-4752-AAF4-7D47CE41B384',
                'name' => 'Classical Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'slug' => 'classical-brass-ensembles',
                'guid' => '0692D9B7-D65F-4F77-A4E9-DF3CD67BBC1C',
                'name' => 'Classical Brass Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'slug' => 'classical-cello',
                'guid' => 'A31F16CA-C86C-4723-8719-7B129A5096AE',
                'name' => 'Classical Cello',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'slug' => 'classical-chorus',
                'guid' => 'D3D218EE-0D27-487B-A92F-176C609E46C8',
                'name' => 'Classical Chorus',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'slug' => 'classical-duos',
                'guid' => '30EA82B6-CCAA-48AD-9FC2-16E377F44901',
                'name' => 'Classical Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'slug' => 'classical-ensembles',
                'guid' => 'A79CED95-2A12-40F6-AACE-9BAC853C2321',
                'name' => 'Classical Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'slug' => 'classical-fiddlers',
                'guid' => '0CD07A04-84D8-4009-A5C8-BA777C0CE850',
                'name' => 'Classical Fiddlers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'slug' => 'classical-flute',
                'guid' => '658369EA-64B6-49BB-BE1B-2069A45BF5FD',
                'name' => 'Classical Flute',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'slug' => 'classical-guitar',
                'guid' => 'F576A9C2-6026-4F10-A1E6-EB1BA82259D3',
                'name' => 'Classical Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'slug' => 'classical-harp',
                'guid' => '1C48DAAB-7D92-4605-8B8A-EFD91C6289E7',
                'name' => 'Classical Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'slug' => 'classical-music-ensembles',
                'guid' => '53F34BBD-89CF-400F-A2E2-64A07856FE21',
                'name' => 'Classical Music Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'slug' => 'classical-organ',
                'guid' => '2E65BD73-4CDC-4B16-B1FA-81ECB8980637',
                'name' => 'Classical Organ',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'slug' => 'classical-piano',
                'guid' => '76397554-E555-4DAA-B7A9-5BDBA8D96674',
                'name' => 'Classical Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'slug' => 'classical-quartets',
                'guid' => '7CDC2B55-787F-4C74-8A3C-EA167BBE486D',
                'name' => 'Classical Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'slug' => 'classical-singers',
                'guid' => '7B3E8004-E21B-4FCB-A2A2-F55E236EE8EA',
                'name' => 'Classical Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'slug' => 'classical-string-quartets',
                'guid' => '71C29E14-9BCF-4200-BC07-EDF58E55862D',
                'name' => 'Classical String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'slug' => 'classical-trios',
                'guid' => '46AB5C5B-CAC5-49E7-8E5A-9BBBD2B87742',
                'name' => 'Classical Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'slug' => 'classical-trumpet',
                'guid' => 'B5554AE1-4426-4C2D-8B3F-2351FC8A5750',
                'name' => 'Classical Trumpet',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'slug' => 'classical-violin',
                'guid' => 'E9CC0999-DBEF-49DF-9513-0F4177BF7FA7',
                'name' => 'Classical Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'slug' => 'classical-woodwind-ensembles',
                'guid' => '44718287-69D5-48FF-9231-CF3F6477C61F',
                'name' => 'Classical Woodwind Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'slug' => 'clean-comedians',
                'guid' => 'FA7D2718-5F69-4939-BC33-89BFB57A48DB',
                'name' => 'Clean Comedians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'slug' => 'clint-eastwood-impersonators',
                'guid' => 'C3C95EA1-52F6-4640-8EF3-5990035B7ADB',
                'name' => 'Clint Eastwood Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'slug' => 'clog-dancing',
                'guid' => 'A072F295-F469-4BA2-9C2C-C2369993579B',
                'name' => 'Clog Dancing',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'slug' => 'clowns',
                'guid' => '1E4327B2-5141-4801-BB7D-0CC2FA61E0B1',
                'name' => 'Clowns',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'slug' => 'club-djs',
                'guid' => '7D947C10-0E0C-4904-80E1-5045C4E5414B',
                'name' => 'Club DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'slug' => 'coldplay-tribute-bands',
                'guid' => 'AE16A9D5-EA05-44B3-ABD4-2C133E0AE02A',
                'name' => 'Coldplay Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'slug' => 'comedians',
                'guid' => 'FAFA5DED-397E-4E02-836F-62C6B6B1AF84',
                'name' => 'Comedians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'slug' => 'comedy-acts',
                'guid' => '716A7352-0799-4460-8E0C-56971E9EE14C',
                'name' => 'Comedy Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'slug' => 'comedy-groups',
                'guid' => '4588A1E2-4986-4B33-B63B-7747BADCDDA5',
                'name' => 'Comedy Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'slug' => 'comedy-hypnotists',
                'guid' => '6B003A91-D036-46E7-B377-DFE5E40F9E4D',
                'name' => 'Comedy Hypnotists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'slug' => 'comedy-impersonators',
                'guid' => 'C332A19B-832D-40AE-81D0-A8BA5AB86345',
                'name' => 'Comedy Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'slug' => 'comedy-improv-shows',
                'guid' => '6D03A8B7-0CB2-47AA-948E-4BFEADD771BF',
                'name' => 'Comedy Improv Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'slug' => 'comedy-jugglers',
                'guid' => '2DF25CB3-4C8B-4231-ABE1-867F3C348FE9',
                'name' => 'Comedy Jugglers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'slug' => 'comedy-magicians',
                'guid' => '1BE33118-1BD7-4E9B-A44D-F83AD9C9558A',
                'name' => 'Comedy Magicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'slug' => 'comedy-shows',
                'guid' => 'F3D5E371-44F2-4EFC-B5A6-4A87B3F70E90',
                'name' => 'Comedy Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'slug' => 'comedy-singers',
                'guid' => '12867EF1-D1DC-463A-879B-2F68F867AA6B',
                'name' => 'Comedy Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'slug' => 'comedy-stunts',
                'guid' => '85E28F61-2096-4937-8F55-13585816E8BF',
                'name' => 'Comedy Stunts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'slug' => 'comedy-ventriloquists',
                'guid' => 'CE4F76FB-DEBF-4705-B368-9CA9929D79C0',
                'name' => 'Comedy Ventriloquists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'slug' => 'composers',
                'guid' => '98131F8C-2A1C-4B92-840C-05B525429A84',
                'name' => 'Composers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'slug' => 'concert-bands',
                'guid' => 'FAFD0BF9-2CAA-48F2-ABF9-6343EBF030B5',
                'name' => 'Concert Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'slug' => 'concessions',
                'guid' => '36A1E3B4-6455-464B-848E-3E8B05C98B4B',
                'name' => 'Concessions',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'slug' => 'contortionists',
                'guid' => '475D18AC-A1DD-4B6C-B6AF-68B435D3F5E9',
                'name' => 'Contortionists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'slug' => 'convertible-car-rentals',
                'guid' => '83D921AD-1A94-455D-B100-68D1093BD340',
                'name' => 'Convertible Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'slug' => 'corporate-magicians',
                'guid' => '0909BEA6-5A09-46A6-95F9-44A99F0A5269',
                'name' => 'Corporate Magicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'slug' => 'corporate-speakers',
                'guid' => 'A2F255D9-E097-4ABA-A18A-C0A7AB2DF84E',
                'name' => 'Corporate Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'slug' => 'costumed-characters',
                'guid' => '0B1D1490-AB8B-4B0B-9DBF-2486CDE93E42',
                'name' => 'Costumed Characters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'slug' => 'costumes',
                'guid' => 'A61A2990-E1F8-4C4C-BDD0-0271DFD74EC4',
                'name' => 'Costumes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'slug' => 'country-acoustic-guitar',
                'guid' => 'A8DECF1B-A8A3-4F75-9865-84D3446ACEBC',
                'name' => 'Country Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'slug' => 'country-bands',
                'guid' => '981DDCFC-684F-4FC3-88B9-59ADBB6A8987',
                'name' => 'Country Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'slug' => 'country-duos',
                'guid' => '40BF918E-2A82-46B8-BADF-59F3657AB6F8',
                'name' => 'Country Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'slug' => 'country-folk-ensembles',
                'guid' => '208D6DA9-D69F-467F-8CBD-982811D9FFBB',
                'name' => 'Country/Folk Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'slug' => 'country-guitar',
                'guid' => 'B9650BDF-6B4E-4030-9851-6AED37D528A0',
                'name' => 'Country Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'slug' => 'country-line-dance-instructors',
                'guid' => 'B2DA2D5E-69DB-4298-AD7F-AB2FD7856B4A',
                'name' => 'Country Line Dance Instructors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'slug' => 'country-line-dancers',
                'guid' => '12DB7355-4F98-4D9F-B949-D816554D905A',
                'name' => 'Country Line Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'slug' => 'country-music-bands',
                'guid' => 'C188F9D0-CA61-4112-B386-0E46C37708E0',
                'name' => 'Country Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'slug' => 'country-singers',
                'guid' => '68C2C4B0-4161-429E-84F5-8AC641F99F66',
                'name' => 'Country Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'slug' => 'country-trios',
                'guid' => '15023602-3755-4102-9C87-A0969D70CBEE',
                'name' => 'Country Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'slug' => 'cover-bands',
                'guid' => '2A73B231-CC87-40DF-887C-C662782A71CB',
                'name' => 'Cover Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'slug' => 'cowboy-comedy-entertainment',
                'guid' => 'D1F1806A-462E-471F-A1FF-98203D4F32AA',
                'name' => 'Cowboy Comedy Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'slug' => 'cowboy-guitarists',
                'guid' => '92392F24-C146-4C63-A459-8088ADFE63CE',
                'name' => 'Cowboy Guitarists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'slug' => 'cowboy-music',
                'guid' => 'FDAA913E-1629-48C9-B61F-60A1A108B975',
                'name' => 'Cowboy Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'slug' => 'cowboy-singers',
                'guid' => 'E8191127-F5CB-41E9-AECA-7886833C6290',
                'name' => 'Cowboy Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'slug' => 'cowboy-story-tellers',
                'guid' => '8829523C-AC0C-4966-9FAC-7B15C97EE93D',
                'name' => 'Cowboy Story Tellers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'slug' => 'cowboys',
                'guid' => '1291F403-7DFB-4EBD-BB88-D17CFF1873CE',
                'name' => 'Cowboys',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'slug' => 'cream-tribute-bands',
                'guid' => '3AA8D1FB-72A2-443A-B495-D01AB08C7B65',
                'name' => 'Cream Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'slug' => 'creedence-clearwater-revival-tributes',
                'guid' => '1401FBBC-628D-4565-8F62-9D33ABD480C1',
                'name' => 'Creedence Clearwater Revival Tributes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'slug' => 'crooners',
                'guid' => '028368B8-4C53-4A23-86D6-E5439422A3DC',
                'name' => 'Crooners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'slug' => 'cuban-bands',
                'guid' => 'D5F58635-374A-4FA9-BEC1-CA55EF97BA73',
                'name' => 'Cuban Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'slug' => 'cuban-entertainment',
                'guid' => 'D4819671-6CC3-4FD6-A7F9-0CFA5B79AFCA',
                'name' => 'Cuban Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'slug' => 'cumbia-bands',
                'guid' => '323FD28B-46E7-443E-A08E-D0CF2C064D7C',
                'name' => 'Cumbia Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'slug' => 'dance-bands',
                'guid' => '293B870D-02F6-49DD-9275-DCC87B6392C4',
                'name' => 'Dance Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'slug' => 'dance-ensembles',
                'guid' => '6B1A0DA4-48C5-4559-B1DA-1C970C7A89CC',
                'name' => 'Dance Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'slug' => 'dance-entertainment',
                'guid' => 'E35A0452-7E7F-45EB-B2C6-208D7FDE581C',
                'name' => 'Dance Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'slug' => 'dance-groups',
                'guid' => 'A3B1B6F0-C25F-4888-ADAF-1B1AA5A47CD8',
                'name' => 'Dance Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'slug' => 'dance-instructors',
                'guid' => 'F0517120-B442-4250-A309-CCADC25FEA42',
                'name' => 'Dance Instructors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'slug' => 'dance-music-bands',
                'guid' => '97EA4D6E-26F8-4A34-99FA-801F5E7BC30E',
                'name' => 'Dance Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'slug' => 'dance-singers',
                'guid' => '14F2D1A0-4959-4CBD-997E-E620A819554A',
                'name' => 'Dance Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'slug' => 'dance-troupes',
                'guid' => '67EC47BC-CA19-44E1-A2DD-475E26FAEC24',
                'name' => 'Dance Troupes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'slug' => 'dancers',
                'guid' => 'EACA5C2A-040E-48A9-A735-F68CB17E9E55',
                'name' => 'Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'slug' => 'dave-matthews-tribute-bands',
                'guid' => 'BFEDB335-B1A1-4D5C-984C-314DA9395B42',
                'name' => 'Dave Matthews Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'slug' => 'david-bowie-tribute-acts',
                'guid' => '0B53EC28-AE58-4056-BB84-7CD45F583645',
                'name' => 'David Bowie Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'slug' => 'dean-martin-impersonators',
                'guid' => '93CCA9E0-C48F-48ED-8E47-19808E8051C0',
                'name' => 'Dean Martin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'slug' => 'dean-martin-tribute-acts',
                'guid' => 'CBE110F4-3835-4282-8B8B-3255D580B39D',
                'name' => 'Dean Martin Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'slug' => 'decade-style-parties',
                'guid' => '5BC96817-E3A3-42BB-A779-96F618B5BD71',
                'name' => 'Decade Style Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'slug' => 'decades-bands',
                'guid' => 'C1DAEEA1-F99A-42DD-A224-968104A14EC0',
                'name' => 'Decades Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'slug' => 'def-leppard-tribute-bands',
                'guid' => '00A942F9-0AA7-49F2-BCF6-4811F7A75E5E',
                'name' => 'Def Leppard Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'slug' => 'destination-photographers',
                'guid' => 'D4E0842E-A055-4903-BCC2-267FEC73266D',
                'name' => 'Destination Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'slug' => 'diana-ross-impersonators',
                'guid' => 'CCDD677C-B37E-48CE-B215-6A0E0B23BB66',
                'name' => 'Diana Ross Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'slug' => 'didgeridoo-players',
                'guid' => 'BFD2FCF8-C6C1-496F-A973-971416C943D1',
                'name' => 'Didgeridoo Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'slug' => 'disc-jockeys',
                'guid' => '260E3A87-D20D-4B54-BABC-D536899F6E2C',
                'name' => 'Disc Jockeys',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'slug' => 'disco-bands',
                'guid' => '0FD099E6-704D-48F8-96E0-0CDE929D18C4',
                'name' => 'Disco Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'slug' => 'disco-singers',
                'guid' => 'D9046B98-5AB1-4A32-8D5E-66FB816681D5',
                'name' => 'Disco Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'slug' => 'dixieland-bands',
                'guid' => '2F7719FE-1B2E-446A-884D-6C61AEAD90F2',
                'name' => 'Dixieland Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'slug' => 'dixieland-duos',
                'guid' => '497981A2-0B02-41F5-BF64-2C1345FD367C',
                'name' => 'Dixieland Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'slug' => 'dixieland-trios',
                'guid' => '61534BF3-EAC8-436D-B00D-020FC5B0C5B5',
                'name' => 'Dixieland Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'slug' => 'djs',
                'guid' => '37946CC8-97A4-46B4-BBB9-323C5B275DE8',
                'name' => 'DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'slug' => 'dog-the-bounty-hunter-impersonators',
                'guid' => 'C70FD98B-8A8C-4D97-8B35-CE1B1360698B',
                'name' => 'Dog the Bounty Hunter Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'slug' => 'dolly-parton-impersonators',
                'guid' => '3F294DDD-EE1D-44DE-9CEA-7280EE426AD3',
                'name' => 'Dolly Parton Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'slug' => 'donald-trump-impersonators',
                'guid' => '9BB4B180-ACE4-43DF-A0D7-A499963E13B5',
                'name' => 'Donald Trump Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'slug' => 'donna-summer-impersonators',
                'guid' => '5485A66D-10AF-4D93-83D2-D4322596099A',
                'name' => 'Donna Summer Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'slug' => 'doo-wop-bands',
                'guid' => '8D6ADD8D-96CB-4950-86A0-9A0649FBA3AB',
                'name' => 'Doo-Wop Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'slug' => 'doo-wop-barbershop-quartets',
                'guid' => '064113EC-D958-4752-824A-DCF41930EE52',
                'name' => 'Doo-Wop Barbershop Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'slug' => 'doo-wop-groups',
                'guid' => 'CDFC1CCA-1058-46CD-8DB5-9C3F4863EE67',
                'name' => 'Doo Wop Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'slug' => 'doo-wop-singers',
                'guid' => '3E5C765B-E768-42EA-9424-5C9261FE28D8',
                'name' => 'Doo-Wop Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'slug' => 'doors-tribute-bands',
                'guid' => '1ED5E240-50B8-4AED-A66F-535DB2578246',
                'name' => 'Doors Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'slug' => 'dove-releases',
                'guid' => 'D453086B-0C28-4F96-80B9-E213286E42E8',
                'name' => 'Dove Releases',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'slug' => 'dr-phil-impersonators',
                'guid' => 'A3763BAA-8992-4EF3-AC08-48001D5A4F7E',
                'name' => 'Dr. Phil Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'slug' => 'dreamgirls-tribute-shows',
                'guid' => '2A70355C-40CC-4F6A-B66F-EBAFCAB80572',
                'name' => 'Dreamgirls Tribute Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'slug' => 'drew-carey-impersonators',
                'guid' => 'C1DED026-AD7A-41BE-9552-BD3F0CFD1366',
                'name' => 'Drew Carey Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'slug' => 'drum-and-bugle-corps',
                'guid' => '509DE04E-EED6-4CF6-9A55-9D6294804D6A',
                'name' => 'Drum and Bugle Corps',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'slug' => 'drummers',
                'guid' => '591E0FC2-3B98-4ED1-8835-76309CA740FF',
                'name' => 'Drummers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'slug' => 'dueling-pianos',
                'guid' => 'B55D9154-758C-4FBC-A34F-12232E6FC3E9',
                'name' => 'Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'slug' => 'dulcimer-players',
                'guid' => 'EA6E75B8-FE40-4C75-974F-F8C5F2A43F52',
                'name' => 'Dulcimer Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'slug' => 'dunk-tank-rentals',
                'guid' => '0136830D-27AB-48FE-9F78-A50C7E010720',
                'name' => 'Dunk Tank Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'slug' => 'duran-duran-tribute-bands',
                'guid' => 'E88F3126-3F8D-40CF-9FDA-8F41CA5B0786',
                'name' => 'Duran Duran Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'slug' => 'eagles-tribute-bands',
                'guid' => '23C04914-428F-4571-99E1-384EA1876504',
                'name' => 'Eagles Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'slug' => 'easter-bunny',
                'guid' => '29E7F755-E850-45A1-8002-B586DA1FB28A',
                'name' => 'Easter Bunny',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'slug' => 'easy-listening-bands',
                'guid' => '93C434DA-B50E-4BAF-9726-BCCE785379F5',
                'name' => 'Easy Listening Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'slug' => 'ed-sullivan-impersonators',
                'guid' => '162A7163-8A1A-47D3-B2C2-E736176600F7',
                'name' => 'Ed Sullivan Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'slug' => 'educational-entertainers',
                'guid' => 'FB465E8C-FB44-4501-832B-194932426B75',
                'name' => 'Educational Entertainers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'slug' => 'egyptian-dancers',
                'guid' => 'FEB75B46-1D97-48B5-86AE-8D3EE0B0944D',
                'name' => 'Egyptian Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'slug' => 'elizabeth-taylor-impersonators',
                'guid' => 'F53B4AA1-B84B-4C6E-8C97-81B97E8B9D7C',
                'name' => 'Elizabeth Taylor Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'slug' => 'elton-john-impersonators',
                'guid' => '4E0CC36C-A8E8-494D-A82E-79F56DB69292',
                'name' => 'Elton John Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'slug' => 'elvis-presley-impersonators',
                'guid' => 'D6995AA9-9585-45B8-BDDF-F9906B5C6D05',
                'name' => 'Elvis Presley Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'slug' => 'emcees',
                'guid' => '54264452-3FAE-4309-9FCF-4F9D9DE7D343',
                'name' => 'Emcees',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'slug' => 'engelbert-humperdinck-impersonators',
                'guid' => '5D1B2F31-8051-4C1C-A34D-1D74C27D6916',
                'name' => 'Engelbert Humperdinck Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'slug' => 'ensembles',
                'guid' => 'EBE1F00B-70C8-476B-ADA7-2B1BB6E605C9',
                'name' => 'Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'slug' => 'eric-clapton-tribute-artists',
                'guid' => 'F2A653BD-D172-4203-8540-F72BAD0E19C9',
                'name' => 'Eric Clapton Tribute Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'slug' => 'escalade-limousines',
                'guid' => 'E09A2847-912B-4477-AB17-DB8963CC91FC',
                'name' => 'Escalade Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'slug' => 'escape-artists',
                'guid' => 'A4956B22-A3DA-447F-B2D9-904DA40827EE',
                'name' => 'Escape Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'slug' => 'ethel-merman-impersonators',
                'guid' => '618F2D81-B21B-4CC9-9437-9D12F73C75D9',
                'name' => 'Ethel Merman Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'slug' => 'event-artists',
                'guid' => '39B72944-0197-4433-BC24-305E0001D3E4',
                'name' => 'Event Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'slug' => 'event-buses',
                'guid' => '47DCB276-3F84-48BF-A887-F44CED45489B',
                'name' => 'Event Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'slug' => 'event-coordinators',
                'guid' => '2E42A88D-0860-45DE-BBA3-95A18D08FD40',
                'name' => 'Event Coordinators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'slug' => 'event-designers',
                'guid' => 'B880003C-31D7-4F09-984E-4F18C29CF893',
                'name' => 'Event Designers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'slug' => 'event-djs',
                'guid' => '40FEE21B-F533-418B-B0A1-759944FB5F0D',
                'name' => 'Event DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'slug' => 'event-florists',
                'guid' => '5FB5F746-E8CE-4BA7-85FD-077BC006D242',
                'name' => 'Event Florists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'slug' => 'event-furnishings',
                'guid' => '5FE2DDA6-932D-43F9-BC91-54F4AB7EA6A2',
                'name' => 'Event Furnishings',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'slug' => 'event-limousines',
                'guid' => '4894D202-8483-47E8-8491-382A9AB439F1',
                'name' => 'Event Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'slug' => 'event-photographers',
                'guid' => '6E7B6D05-E6E9-470B-8E39-A1C2DE629753',
                'name' => 'Event Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'slug' => 'event-planners',
                'guid' => '5D9A1149-1860-47A4-8A5C-B3FEBC27322B',
                'name' => 'Event Planners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'slug' => 'event-planning',
                'guid' => '569EFE23-74BF-4BA4-B69D-BB6A81FFC68F',
                'name' => 'Event Planning',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'slug' => 'event-security-services',
                'guid' => '055C2780-7993-434C-B559-609FDF0FF408',
                'name' => 'Event Security Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'slug' => 'event-services',
                'guid' => 'EA048297-128F-4793-9491-16812A1B2BD8',
                'name' => 'Event Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'slug' => 'event-staff',
                'guid' => 'E18D6D10-4476-4E3E-9A0A-FCC90A61A4E5',
                'name' => 'Event Staff',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'slug' => 'event-staffing',
                'guid' => '7860DDB5-4B7A-4C85-846F-EC091201BC40',
                'name' => 'Event Staffing',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'slug' => 'event-videographers',
                'guid' => '4B5C36F2-4717-415C-828E-F8F1135D00B7',
                'name' => 'Event Videographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'slug' => 'face-painters',
                'guid' => '164C2BB2-6C37-4F4E-A6BF-1DC998F9483B',
                'name' => 'Face Painters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'slug' => 'face-painting',
                'guid' => '3CF2E552-A95D-4B42-AA42-C44BD48D0E3F',
                'name' => 'Face Painting',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'slug' => 'family-photographers',
                'guid' => '6E40B43D-D143-4A97-B1A3-F1EAD194D375',
                'name' => 'Family Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'slug' => 'fashion-consultants',
                'guid' => 'A181C1FC-5C3C-4D54-923E-C2FC6B89F02F',
                'name' => 'Fashion Consultants',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'slug' => 'fashion-photographers',
                'guid' => 'FAE5BA5C-CE64-4EC0-91BC-2A05FFBEC5A5',
                'name' => 'Fashion Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'slug' => 'fast-draw-performers',
                'guid' => '50CDD5DF-B0A7-47D8-9425-504A63777C32',
                'name' => 'Fast Draw Performers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'slug' => 'fats-domino-impersonators',
                'guid' => 'DD9D9AC8-AB66-43AF-BC77-B8C30B4BDE3F',
                'name' => 'Fats Domino Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'slug' => 'female-impersonators',
                'guid' => '9796DDE6-8259-45B9-9937-D6183B111D46',
                'name' => 'Female Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'slug' => 'female-models',
                'guid' => '8839AC9A-FEE1-4553-9024-B5AA2DC78528',
                'name' => 'Female Models',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'slug' => 'fiddlers',
                'guid' => '6E88B8CD-7542-48C0-A807-A7BC2B4CF86E',
                'name' => 'Fiddlers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'slug' => 'fine-artists',
                'guid' => 'DD626B92-5A9B-4AB0-9F85-9F812641D78A',
                'name' => 'Fine Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'slug' => 'fire-artists',
                'guid' => 'F17EE25B-30EA-4C96-9F5A-FD0E3CAA061F',
                'name' => 'Fire Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'slug' => 'fire-dancers',
                'guid' => '39257E55-D575-4017-990A-F98077D54FB6',
                'name' => 'Fire Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'slug' => 'fire-eaters',
                'guid' => '1AF8A703-7C94-4FA7-AF16-BA67C71C561D',
                'name' => 'Fire Eaters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'slug' => 'fire-truck-parties',
                'guid' => 'B4F10517-6E64-4024-9110-0660D3CDC220',
                'name' => 'Fire Truck Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'slug' => 'flair-bartenders',
                'guid' => '2BC1B012-A82F-42F0-BC82-9B4A0FED3C90',
                'name' => 'Flair Bartenders',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'slug' => 'flamenco-acoustic-guitar',
                'guid' => 'CC5218F0-7034-43AF-A9F6-68ACE31D381D',
                'name' => 'Flamenco Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'slug' => 'flamenco-dancers',
                'guid' => '6CDCC3FB-EBA8-4009-BD39-33E0BB8CD213',
                'name' => 'Flamenco Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'slug' => 'flamenco-duos',
                'guid' => 'E3F6758E-2909-4E52-8F53-FA74DAC632B6',
                'name' => 'Flamenco Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'slug' => 'flamenco-groups',
                'guid' => '68496C18-E65A-4856-AD52-2DE47C722155',
                'name' => 'Flamenco Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'slug' => 'flamenco-guitar',
                'guid' => 'B988E008-C69A-4E6F-AA15-25BB10358190',
                'name' => 'Flamenco Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'slug' => 'flamenco-singers',
                'guid' => '11B1D2A8-BBA0-4CDC-95CC-AFAE1C58F011',
                'name' => 'Flamenco Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'slug' => 'fleetwood-mac-tribute-bands',
                'guid' => '90D43BA7-8536-4DDD-BE3D-00513F37E7F4',
                'name' => 'Fleetwood Mac Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'slug' => 'florists',
                'guid' => '35EF8CD3-B0EA-4F83-A78A-CB4998266536',
                'name' => 'Florists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'slug' => 'flowers-and-decors',
                'guid' => '617C20EB-24C7-47FA-B0AD-FC2609EE7A84',
                'name' => 'Flowers and Decors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'slug' => 'flute-players-and-flutists',
                'guid' => '73989E82-DACF-411F-B3BC-DC629CC94947',
                'name' => 'Flute Players and Flutists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'slug' => 'folk-acoustic-guitar',
                'guid' => 'FED0BF3A-C8DE-451B-AF56-6A33DFC30658',
                'name' => 'Folk Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'slug' => 'folk-bands',
                'guid' => '8EACA01E-4DFA-4537-8126-0BAD63846953',
                'name' => 'Folk Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'slug' => 'folk-banjo',
                'guid' => 'CA57A467-B046-4B3A-9F9B-00A584284BE4',
                'name' => 'Folk Banjo',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'slug' => 'folk-dancers',
                'guid' => 'FA507A6A-A8F6-43FD-BE24-2C2EF7FC08E4',
                'name' => 'Folk Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'slug' => 'folk-duos',
                'guid' => '738A09BE-3EC5-4157-BA7D-716E664F21DE',
                'name' => 'Folk Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'slug' => 'folk-fiddlers',
                'guid' => '4FC22035-64AA-4FC4-8B93-CE715D74B032',
                'name' => 'Folk Fiddlers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'slug' => 'folk-guitar',
                'guid' => '34420B31-70B3-4504-B46D-412990F46C3F',
                'name' => 'Folk Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'slug' => 'folk-harmonica',
                'guid' => 'C014DD04-BD6B-41C8-9217-5D73455545B9',
                'name' => 'Folk Harmonica',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'slug' => 'folk-music-bands',
                'guid' => '3F60451D-6A51-4BE1-BFB4-885B86E797DF',
                'name' => 'Folk Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'slug' => 'folk-singers',
                'guid' => '0F0FEEFF-B559-4AD7-8256-E4E16B00947D',
                'name' => 'Folk Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'slug' => 'folk-trios',
                'guid' => '18BD26AD-0EA0-42F6-91FD-6E82A4AA13A7',
                'name' => 'Folk Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'slug' => 'food-and-drinks',
                'guid' => '04B6BBDB-ED86-4B58-9FDD-FBDD27FCC889',
                'name' => 'Food and Drinks',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'slug' => 'food-carts',
                'guid' => '74B09771-E803-495D-89F7-46FFF2059C4E',
                'name' => 'Food Carts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'slug' => 'foreigner-tribute-bands',
                'guid' => '5DDBC510-DE7A-4070-B45B-46F4D538D92B',
                'name' => 'Foreigner Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'slug' => 'forest-gump-impersonators',
                'guid' => 'E847DF40-F043-40A7-BAE0-59781158E621',
                'name' => 'Forest Gump Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'slug' => 'fortune-tellers',
                'guid' => '31EBB26B-562B-434F-A79A-0D0B2048055A',
                'name' => 'Fortune Tellers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'slug' => 'frank-sinatra-impersonators',
                'guid' => 'C53EA176-B0AC-467B-B64E-58A9FB21FADA',
                'name' => 'Frank Sinatra Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'slug' => 'freddy-fender-impersonators',
                'guid' => 'BD0F10D3-B47F-472A-A487-70B391990DF2',
                'name' => 'Freddy Fender Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'slug' => 'french-bands',
                'guid' => 'A973F100-930E-4AA0-BFAF-6C3FC930641B',
                'name' => 'French Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'slug' => 'french-entertainment',
                'guid' => '86E3CBBF-7E6C-4000-822A-00B147706F49',
                'name' => 'French Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'slug' => 'french-music-singers',
                'guid' => 'B6438402-3C9B-4D03-87FF-0A98F997DD48',
                'name' => 'French Music Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'slug' => 'funeral-limousines',
                'guid' => '90F9219C-D132-4930-8A4B-BEDEDC5E7725',
                'name' => 'Funeral Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'slug' => 'funk-bands',
                'guid' => '9CAE73CF-0638-423E-9A75-9C7906C0C94D',
                'name' => 'Funk Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'slug' => 'funk-duos',
                'guid' => 'CA82297E-640C-41AD-A232-C4A8A268D2E2',
                'name' => 'Funk Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'slug' => 'funk-guitar',
                'guid' => 'A259C834-CC24-48E6-92C1-AC01DE0366C0',
                'name' => 'Funk Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'slug' => 'funk-singers',
                'guid' => '7142F4C2-9A02-4BDF-AF45-2F8C7D17EA94',
                'name' => 'Funk Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'slug' => 'funk-trios',
                'guid' => '9D140EC8-F538-47A5-9AB5-DE9EC7F2EA92',
                'name' => 'Funk Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'slug' => 'fusion-bands',
                'guid' => '6B835F02-F6C0-4B1A-8293-8DD4D9E91CFC',
                'name' => 'Fusion Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'slug' => 'game-shows-for-events',
                'guid' => '7D7A41CE-D076-476C-9F84-E76FDA2A0B57',
                'name' => 'Game Shows for Events',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'slug' => 'garth-brooks-impersonators',
                'guid' => '72FE7721-A316-445C-8D97-C46CD9766A61',
                'name' => 'Garth Brooks Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'slug' => 'george-burns-impersonators',
                'guid' => '432A6C91-A28B-48DC-A06D-91B0FD957856',
                'name' => 'George Burns Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'slug' => 'george-bush-impersonators',
                'guid' => 'ACBAB045-294A-4D59-A2F8-73A56DD5FDDD',
                'name' => 'George Bush Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'slug' => 'george-carlin-impersonators',
                'guid' => '913E041A-2F9A-478B-8E07-789F10000D2F',
                'name' => 'George Carlin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'slug' => 'german-bands',
                'guid' => 'E0B794BE-3DC7-4D66-96A0-9831093B4AB8',
                'name' => 'German Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'slug' => 'german-entertainment',
                'guid' => 'A1BAA948-CB49-4484-98A2-B64FEA05E7A4',
                'name' => 'German Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'slug' => 'gold-miners',
                'guid' => 'D3EBC070-D9F0-4BAC-A077-DCBB241AA47D',
                'name' => 'Gold Miners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'slug' => 'gospel-bands',
                'guid' => '814E6D52-65F6-4008-BE3A-B344DFE1D58D',
                'name' => 'Gospel Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'slug' => 'gospel-choirs',
                'guid' => '159F394C-A2B1-4BE7-8BA9-4F4F53215E5A',
                'name' => 'Gospel Choirs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'slug' => 'gospel-music-groups',
                'guid' => 'F73F99DD-6E09-42EE-8E91-14FE04196695',
                'name' => 'Gospel Music Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'slug' => 'gospel-piano',
                'guid' => '1579D1E5-FA12-4CA7-A63A-4062E9CA9678',
                'name' => 'Gospel Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'slug' => 'gospel-singers',
                'guid' => '5066A1A1-0CE3-427E-87E5-464A3B1AEBFF',
                'name' => 'Gospel Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'slug' => 'gowns-and-dresses',
                'guid' => '9ED7EB7A-44CE-4E58-9628-0712EDC7EEA9',
                'name' => 'Gowns and Dresses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'slug' => 'grateful-dead-tribute-bands',
                'guid' => '19A28889-B5A1-473E-B8BF-7F30EBC2256F',
                'name' => 'Grateful Dead Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'slug' => 'greek-bands',
                'guid' => 'EAAEFA33-5A15-4513-B0CB-2965ACA85CED',
                'name' => 'Greek Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 501,
                'slug' => 'greek-entertainment',
                'guid' => '53F88B99-DD76-43FD-A5CD-C0DFD27E4803',
                'name' => 'Greek Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'slug' => 'green-screen-photographers',
                'guid' => '4D249ABB-7CA2-46EA-BC1E-E6F3D1D7C8F2',
                'name' => 'Green Screen Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'slug' => 'green-screen-rentals',
                'guid' => '6A50823C-4861-4D7D-9DFD-34A21A4866A1',
                'name' => 'Green Screen Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'slug' => 'gregory-peck-impersonators',
                'guid' => '5B0A579F-33C0-441F-B60F-1BE15F1AF067',
                'name' => 'Gregory Peck Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'slug' => 'grunge-bands',
                'guid' => '52ACEEEB-FDD1-4B6F-81A1-D07A306BE378',
                'name' => 'Grunge Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'slug' => 'guitarists',
                'guid' => '90FD636F-0B16-4553-BA43-ABED31362668',
                'name' => 'Guitarists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'slug' => 'gun-spinners',
                'guid' => '60F6B8CD-00E4-48FB-B625-5490A904E651',
                'name' => 'Gun Spinners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'slug' => 'guns-n-roses-tribute-bands',
                'guid' => 'C40027A3-8764-4F82-9A32-75565D67DF91',
                'name' => 'Guns N\' Roses Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'slug' => 'gunslingers',
                'guid' => '8025C34B-F360-4239-AD73-733E952A987A',
                'name' => 'Gunslingers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'slug' => 'gwen-stefani-impersonators',
                'guid' => '5F5AF3AA-8A60-415B-B721-7924D8FF158B',
                'name' => 'Gwen Stefani Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'slug' => 'gypsy-bands',
                'guid' => 'DB7743D3-3A86-4A2A-BEBA-D1A0D4210847',
                'name' => 'Gypsy Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'slug' => 'gypsy-violin',
                'guid' => '8E2BFED8-A542-4664-AF9A-28AC8ADDDDB7',
                'name' => 'Gypsy Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'slug' => 'hair-stylists',
                'guid' => '28494379-7E1D-4D59-9F2F-73E45D1AB70E',
                'name' => 'Hair Stylists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'slug' => 'hammered-dulcimers',
                'guid' => 'D57C8E50-E6E3-4496-9890-E8EB9DB6BDFF',
                'name' => 'Hammered Dulcimers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'slug' => 'hand-models',
                'guid' => 'FD60AF1F-1B11-4F6F-ACA1-BBBEB94BCE64',
                'name' => 'Hand Models',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'slug' => 'handbell-choirs',
                'guid' => 'E9B1CCAA-54D4-47EF-8E82-4F79794E07D9',
                'name' => 'Handbell Choirs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'slug' => 'handwriting-analysis',
                'guid' => 'E7C480B4-4FF6-42BE-B570-695370617082',
                'name' => 'Handwriting Analysis',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'slug' => 'hank-williams-impersonators',
                'guid' => '1B8BE475-8A11-4A0A-8808-B8C40B979A5A',
                'name' => 'Hank Williams Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'slug' => 'hannah-montana-impersonators',
                'guid' => '136564DB-4023-4054-AAA3-90878D2F44F4',
                'name' => 'Hannah Montana Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'slug' => 'hardcore-bands',
                'guid' => '7A9BED0B-E6CC-4BD9-9164-65B0DED356ED',
                'name' => 'Hardcore Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'slug' => 'harmonica',
                'guid' => 'A513C598-D025-432C-B6D7-262CFF23DC1B',
                'name' => 'Harmonica',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'slug' => 'harp',
                'guid' => '8DC2C65E-4D5F-461E-B10A-8E378C3F0445',
                'name' => 'Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'slug' => 'harry-potter-impersonators',
                'guid' => 'BE7B9D99-3939-4E8A-A70C-A294F5E5910E',
                'name' => 'Harry Potter Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'slug' => 'hawaiian-bands',
                'guid' => '6E97BE53-B08C-403C-AE80-B2118ECC1016',
                'name' => 'Hawaiian Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'slug' => 'hawaiian-dancers',
                'guid' => '054A4317-00EB-4D05-BD8D-71F0F297AE96',
                'name' => 'Hawaiian Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'slug' => 'hawaiian-entertainment',
                'guid' => 'C8575AD2-B11C-4213-973E-79938981E3A9',
                'name' => 'Hawaiian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'slug' => 'hawaiian-guitar',
                'guid' => '690DB589-D008-4F11-9C5B-A3A3FC8CB40F',
                'name' => 'Hawaiian Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'slug' => 'hayrides',
                'guid' => 'B94ADAF9-B581-4BB7-8870-0341296A1F29',
                'name' => 'Hayrides',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'slug' => 'headshots',
                'guid' => 'F3856E42-2616-4AEE-A1C6-34A42BC58C03',
                'name' => 'Headshots',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'slug' => 'heart-tribute-bands',
                'guid' => '2CB1E140-1458-4820-A3EC-F344F26957EB',
                'name' => 'Heart Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'slug' => 'heavy-metal-bands',
                'guid' => '029709C9-9B60-4DF1-A24D-14615683CD09',
                'name' => 'Heavy Metal Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'slug' => 'henna-artists',
                'guid' => 'A522DF4A-42DB-469D-900B-782320FDD307',
                'name' => 'Henna Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'slug' => 'henna-tattoo-artists',
                'guid' => '17E5E0D3-DFAE-4B44-8DE8-6A2AC93C58CB',
                'name' => 'Henna Tattoo Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'slug' => 'herald-trumpeteers',
                'guid' => '92A5563B-08AA-4523-8979-5E562D5E5ADF',
                'name' => 'Herald Trumpeteers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'slug' => 'hillary-clinton-impersonators',
                'guid' => 'AB03343C-2211-4C21-AB38-AE3678018A9B',
                'name' => 'Hillary Clinton Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'slug' => 'hip-hop-artists',
                'guid' => '67984EF2-116F-4B71-BBBE-16F4583B280C',
                'name' => 'Hip Hop Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'slug' => 'hip-hop-bands',
                'guid' => '4AD121D2-FBE3-4276-BE69-ED728B90339C',
                'name' => 'Hip Hop Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'slug' => 'hip-hop-dancers',
                'guid' => '17C866C1-A916-47CD-B116-C7BD978FCE00',
                'name' => 'Hip Hop Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'slug' => 'hip-hop-groups',
                'guid' => 'AD60F68E-DDE3-484E-9DD2-AC86593EB2F9',
                'name' => 'Hip Hop Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'slug' => 'hispanic',
                'guid' => 'FDA0E191-7902-45CF-BA0F-9292B77EF87B',
                'name' => 'Hispanic',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'slug' => 'hispanic-bands',
                'guid' => '23B1664F-9111-4B05-AF4E-4307B68125AD',
                'name' => 'Hispanic Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'slug' => 'hispanic-dancers',
                'guid' => 'EABFB36D-9608-4347-9018-B805C164158A',
                'name' => 'Hispanic Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'slug' => 'historical-figures-impersonators',
                'guid' => '7ED82E9B-DD12-4E4C-B727-5B2BBA7CFD76',
                'name' => 'Historical Figures Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'slug' => 'historical-musicians',
                'guid' => 'C2306F10-C991-4800-A9D7-CC1C8C6CF3A6',
                'name' => 'Historical Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'slug' => 'holiday-entertainment',
                'guid' => '20E78114-0105-4676-A0BA-01E659BB2F13',
                'name' => 'Holiday Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'slug' => 'honky-tonk-bands',
                'guid' => '58520D29-D26B-4DBE-A683-17C1016E5BB6',
                'name' => 'Honky Tonk Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'slug' => 'hoopologists',
                'guid' => 'E64F65FC-F77F-4C54-AE75-169206AD0FE6',
                'name' => 'Hoopologists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'slug' => 'horse-drawn-carriages',
                'guid' => 'E2BB1A8B-2E62-4FC8-9ED9-F022EA44DE56',
                'name' => 'Horse Drawn Carriages',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'slug' => 'host-hostesses',
                'guid' => 'ABBC28BF-2839-43C1-897C-5C64366F4893',
                'name' => 'Host/Hostesses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'slug' => 'house-djs',
                'guid' => 'AF853EFD-4A48-46E3-9C38-2411C2981953',
                'name' => 'House DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'slug' => 'howard-stern-impersonators',
                'guid' => 'DDD384DD-1936-4514-A286-B219DCBC91F7',
                'name' => 'Howard Stern Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'slug' => 'hula-dancers',
                'guid' => '3CF09ED4-42B2-4FD7-832D-C3C68AB92D81',
                'name' => 'Hula Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'slug' => 'hula-hoop-dancers',
                'guid' => 'CDC34C24-BF83-4221-9F3F-8046C18906CA',
                'name' => 'Hula Hoop Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'slug' => 'human-mannequins',
                'guid' => '4408C6AA-010A-4405-B3DC-7D4F30651631',
                'name' => 'Human Mannequins',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'slug' => 'human-statues',
                'guid' => 'B29EB176-460D-4476-833A-4A78113A72D5',
                'name' => 'Human Statues',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'slug' => 'hummer-limousines',
                'guid' => 'A94F17D8-CF2D-4414-ADB1-3A3C53D570AC',
                'name' => 'Hummer Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'slug' => 'humorists',
                'guid' => '48B3114A-A6A7-449C-8A94-3148BF1429F2',
                'name' => 'Humorists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'slug' => 'hypnotists',
                'guid' => 'D5515F04-5409-475B-9E57-7DDCADF1D1E3',
                'name' => 'Hypnotists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'slug' => 'illusionists',
                'guid' => 'AAB904A3-2AF9-4134-9880-58815B89F9CE',
                'name' => 'Illusionists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'slug' => 'impersonators',
                'guid' => '5C2F32E6-C305-4C12-960D-2F705473C5A1',
                'name' => 'Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'slug' => 'impersonators-for-childrens-events',
                'guid' => '77DFDA58-A2BA-46E5-8038-6E1E1E401DFC',
                'name' => 'Impersonators for Children\'s Events',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'slug' => 'impressionists',
                'guid' => 'E9F731BC-B855-4D4D-82CB-BD5AF6AE48DA',
                'name' => 'Impressionists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'slug' => 'indie-rock-bands',
                'guid' => '1E6917C7-B476-4BD2-9BFE-2C9EB5D09444',
                'name' => 'Indie Rock Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'slug' => 'industrial-bands',
                'guid' => '6D5BA108-F455-4ACD-A99F-B6099211DB61',
                'name' => 'Industrial Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'slug' => 'inflatables',
                'guid' => 'FEB45B84-3440-4A1B-8D50-DBC06399E36E',
                'name' => 'Inflatables',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'slug' => 'inspirational-music',
                'guid' => '1266BDE9-9660-4F0E-A622-58CE19547980',
                'name' => 'Inspirational Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'slug' => 'inspirational-speakers',
                'guid' => '7A7639BD-7967-4164-9EE0-A3D63A7472F6',
                'name' => 'Inspirational Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'slug' => 'instrumental-musicians',
                'guid' => 'A321CF3A-48B6-4799-9605-C768CF8FC54F',
                'name' => 'Instrumental Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'slug' => 'interactive-game-shows',
                'guid' => '5BA3F119-C70E-473D-9E75-06BB295EFFAA',
                'name' => 'Interactive Game Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'slug' => 'interior-decorators',
                'guid' => '36708C31-4A5F-4033-89AC-12F411DE4A74',
                'name' => 'Interior Decorators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'slug' => 'invitations',
                'guid' => 'B78ADCD6-66F7-41A2-8C9D-A2B286864200',
                'name' => 'Invitations',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'slug' => 'irish--scottish-entertainment',
                'guid' => '283631E3-FEF2-44A4-84D6-2ACDB3691FC7',
                'name' => 'Irish / Scottish Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'slug' => 'irish-bands',
                'guid' => '2B12FBA3-B291-4F29-BFD5-797B1741821E',
                'name' => 'Irish Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'slug' => 'irish-dance',
                'guid' => 'C8762D60-CAA0-419E-9C1F-2862DC9EE3F2',
                'name' => 'Irish Dance',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'slug' => 'irish-dancers',
                'guid' => '7126544E-A7D9-4929-A01B-8B7140F3F051',
                'name' => 'Irish Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'slug' => 'irish-duos',
                'guid' => 'D3E89A2E-B43C-4245-AD39-79FD324A2533',
                'name' => 'Irish Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'slug' => 'irish-harp',
                'guid' => 'E57D422D-A400-450A-9F95-34A4F706C102',
                'name' => 'Irish Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'slug' => 'irish-singers',
                'guid' => '60A98617-0BB2-4DE8-B705-93142B2A65E5',
                'name' => 'Irish Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'slug' => 'irish-trios',
                'guid' => '1404D0D2-7BC1-4CDF-96C3-9B507E1FDD1B',
                'name' => 'Irish Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'slug' => 'island-dancers',
                'guid' => '83589FB2-6915-4C36-B6BE-39D832F69396',
                'name' => 'Island Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'slug' => 'italian-bands',
                'guid' => '7FAD30A3-341A-4639-B6F1-95EC14819A69',
                'name' => 'Italian Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'slug' => 'italian-entertainment',
                'guid' => 'E0FA6197-00B0-4D26-8EF8-F111D6D3D32E',
                'name' => 'Italian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'slug' => 'italian-singers',
                'guid' => '27CD858D-A7A6-4D46-958F-AB0EF61A1D54',
                'name' => 'Italian Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'slug' => 'jack-nicholson-impersonators',
                'guid' => 'B7274FDD-2542-4DC3-8208-E4C4D438E620',
                'name' => 'Jack Nicholson Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'slug' => 'jam-bands',
                'guid' => 'AD6E9999-0F77-48BA-A587-0A80FA58679C',
                'name' => 'Jam Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'slug' => 'james-brown-impersonators',
                'guid' => '5198539C-0762-4D01-A621-6F0C4F4CAA72',
                'name' => 'James Brown Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'slug' => 'james-taylor-tribute-acts',
                'guid' => '77883CF7-7939-4DA6-B99A-84F8E8F4FF65',
                'name' => 'James Taylor Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'slug' => 'janet-jackson-impersonators',
                'guid' => '3F24E325-403C-4C21-87E8-D9A154F2E96E',
                'name' => 'Janet Jackson Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'slug' => 'janis-joplin-tribute-acts',
                'guid' => 'E41289E3-2E10-4B22-BC8E-AA82A260ED60',
                'name' => 'Janis Joplin Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'slug' => 'jay-leno-impersonators',
                'guid' => '463BC248-6B96-41E8-A639-C11E53C76558',
                'name' => 'Jay Leno Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'slug' => 'jazz-acoustic-guitar',
                'guid' => 'F1D5E94C-5E5C-40EA-8D41-1049254D112D',
                'name' => 'Jazz Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'slug' => 'jazz-acoustic-guitarists',
                'guid' => '8AB3F110-A354-497D-AE2D-616689391D92',
                'name' => 'Jazz Acoustic Guitarists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'slug' => 'jazz-bands',
                'guid' => '4448BC45-1F0A-44B3-B41C-8696544E4712',
                'name' => 'Jazz Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'slug' => 'jazz-brass-ensembles',
                'guid' => 'CF23C64D-814E-4C6F-BD1D-272DF6453D83',
                'name' => 'Jazz Brass Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'slug' => 'jazz-dancers',
                'guid' => 'DD7E1084-25A1-4194-AF89-AECAF344BB93',
                'name' => 'Jazz Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'slug' => 'jazz-dueling-pianos',
                'guid' => 'AD5F93EF-FA87-4D7F-BC2C-2434B5C0A9EB',
                'name' => 'Jazz Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'slug' => 'jazz-duos',
                'guid' => '5FDBE695-0D65-4AF8-A88F-F2040C044CDD',
                'name' => 'Jazz Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'slug' => 'jazz-ensembles',
                'guid' => '1F9D1356-9952-463B-8D1B-349A63487F22',
                'name' => 'Jazz Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'slug' => 'jazz-flute',
                'guid' => '7FD056C8-D725-4FB3-AC8E-55B4CAC11C2B',
                'name' => 'Jazz Flute',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'slug' => 'jazz-flutists',
                'guid' => 'F4977E34-1015-4CBE-8CEB-A1FB7373E040',
                'name' => 'Jazz Flutists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'slug' => 'jazz-guitar',
                'guid' => 'BA36EB50-F0CA-49DB-89BA-DA84C3FF2873',
                'name' => 'Jazz Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'slug' => 'jazz-guitarists',
                'guid' => '8DF14FE6-3A66-4518-8098-92EF48A2933D',
                'name' => 'Jazz Guitarists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'slug' => 'jazz-keyboardists',
                'guid' => '6AE5D619-FE68-48FE-A7BF-3289C80DDA49',
                'name' => 'Jazz Keyboardists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'slug' => 'jazz-music',
                'guid' => '37F3AEB9-484A-44D6-A0B2-8E3CFC37AB7D',
                'name' => 'Jazz Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'slug' => 'jazz-musicians',
                'guid' => '977EA693-BCA7-45D6-950F-E840E706C145',
                'name' => 'Jazz Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'slug' => 'jazz-one-man-bands',
                'guid' => 'FA16361C-5F4D-4542-B5BC-935A35B7D9D5',
                'name' => 'Jazz One Man Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'slug' => 'jazz-orchestras',
                'guid' => 'D2387C64-B265-43A1-8B50-F81D825FD047',
                'name' => 'Jazz Orchestras',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'slug' => 'jazz-percussion',
                'guid' => '31FD75E5-351E-4404-842D-887017D11E0D',
                'name' => 'Jazz Percussion',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'slug' => 'jazz-percussionists',
                'guid' => 'C745B8A0-0747-46EF-8B41-6DAE7BF7C93C',
                'name' => 'Jazz Percussionists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'slug' => 'jazz-pianists',
                'guid' => 'D88A50EB-5807-482E-B950-8077112EC0AD',
                'name' => 'Jazz Pianists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'slug' => 'jazz-piano',
                'guid' => '66EA0348-F287-48DB-8166-FDCB4BCBA679',
                'name' => 'Jazz Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'slug' => 'jazz-quartets',
                'guid' => '52CB1D50-A456-465C-8D5B-E99AF7BFDBAE',
                'name' => 'Jazz Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'slug' => 'jazz-saxophone',
                'guid' => '8C1AA9C9-5B7E-4D3A-89EF-657A3E26F20F',
                'name' => 'Jazz Saxophone',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'slug' => 'jazz-saxophonists',
                'guid' => '9DF84CAA-A7DA-4838-BC06-DF5F9CCFC5E3',
                'name' => 'Jazz Saxophonists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'slug' => 'jazz-singers',
                'guid' => 'EEBDAD7F-650F-4797-A489-5038C1BA686D',
                'name' => 'Jazz Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'slug' => 'jazz-string-quartets',
                'guid' => 'DEC25FF4-39F5-4FD3-B441-BF9845248853',
                'name' => 'Jazz String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'slug' => 'jazz-swing-bands',
                'guid' => 'E6E55857-FAB9-4FDA-B098-E9E5686724BB',
                'name' => 'Jazz/Swing Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'slug' => 'jazz-swing-ensembles',
                'guid' => '928442CA-A9DC-404E-8B89-296F7158F12A',
                'name' => 'Jazz/Swing Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'slug' => 'jazz-trios',
                'guid' => '69D2DB15-017C-457A-84DC-2E5C94A442BF',
                'name' => 'Jazz Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'slug' => 'jazz-trumpet',
                'guid' => '3DED7D40-3E87-4578-8F5B-18441813189D',
                'name' => 'Jazz Trumpet',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'slug' => 'jazz-trumpet-players',
                'guid' => '2DA9DD5F-C6B9-4FCA-986A-E51F0BD3F33A',
                'name' => 'Jazz Trumpet Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'slug' => 'jazz-violin',
                'guid' => 'C49B68CA-5158-4F8C-B16F-6134B625FA9F',
                'name' => 'Jazz Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'slug' => 'jazz-violinists',
                'guid' => 'AAC40522-704F-4419-98A5-EF5A76F594A4',
                'name' => 'Jazz Violinists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'slug' => 'jennifer-lopez-impersonators',
                'guid' => '0840939F-A6E1-4C28-83AE-19CCD1685B97',
                'name' => 'Jennifer Lopez Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'slug' => 'jerry-lee-lewis-tribute-acts',
                'guid' => '09838569-6A23-4296-B924-B06FDD370DAE',
                'name' => 'Jerry Lee Lewis Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'slug' => 'jerry-lewis-impersonators',
                'guid' => '74C345E0-14A0-40DB-99E7-F4D20678C595',
                'name' => 'Jerry Lewis Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'slug' => 'jewish-entertainment',
                'guid' => '5B20EDA9-E6E6-4F6A-B744-091A3A300FD1',
                'name' => 'Jewish Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'slug' => 'jimi-hendrix-tribute-acts',
                'guid' => '906212CA-352B-4F68-936B-860C8A90C3D5',
                'name' => 'Jimi Hendrix Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'slug' => 'jimmy-buffett-tribute-acts',
                'guid' => '0F599D2B-C4B7-4E69-9FD2-6B55B43E3577',
                'name' => 'Jimmy Buffett Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'slug' => 'joan-rivers-impersonators',
                'guid' => 'DC7F8BE1-C0E2-4BAD-8D2A-0DFCF33F0207',
                'name' => 'Joan Rivers Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'slug' => 'john-denver-tribute-acts',
                'guid' => '82C2866A-6D39-4A15-95F4-0A492730854F',
                'name' => 'John Denver Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'slug' => 'john-lennon-impersonators',
                'guid' => 'F1EF6A7C-2E58-41D9-9C50-E3BB61078B4F',
                'name' => 'John Lennon Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'slug' => 'john-mccain-impersonators',
                'guid' => '26B3A491-A7B6-4EC8-B568-CBCCED634142',
                'name' => 'John McCain Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'slug' => 'john-travolta-impersonators',
                'guid' => '04E5B34E-9342-4B54-A5C2-87E414450690',
                'name' => 'John Travolta Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'slug' => 'john-wayne-impersonators',
                'guid' => '829F2B09-D3B1-451E-BE43-C4CE6C7C923C',
                'name' => 'John Wayne Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'slug' => 'johnny-cash-impersonators',
                'guid' => 'EA4F5748-6B78-47A1-9EC3-EE2289CE6565',
                'name' => 'Johnny Cash Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'slug' => 'johnny-depp-impersonators',
                'guid' => '083D4596-C69D-456B-9BD7-843A58DC654B',
                'name' => 'Johnny Depp Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'slug' => 'johnny-mathis-impersonators',
                'guid' => 'D8680B9B-DFC9-45EC-BAB3-0E7042B87B98',
                'name' => 'Johnny Mathis Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'slug' => 'joni-mitchell-tribute-acts',
                'guid' => '3B77CB5A-A4C9-4B10-B101-D659CBD8C6B0',
                'name' => 'Joni Mitchell Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'slug' => 'journey-tribute-bands',
                'guid' => '8E8C083F-1A5D-4841-85BA-6FED26C32B72',
                'name' => 'Journey Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'slug' => 'judy-garland-impersonators',
                'guid' => '0658CC08-2BA0-495F-9104-EF935CFEBDE6',
                'name' => 'Judy Garland Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'slug' => 'jugglers',
                'guid' => '5B96AABA-88FA-4668-913F-545705105AAE',
                'name' => 'Jugglers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'slug' => 'jump-houses',
                'guid' => '88276D07-A47D-4FE2-BDC9-4B34764DBAEF',
                'name' => 'Jump Houses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'slug' => 'june-carter-tribute-acts',
                'guid' => 'A50321D6-9C78-46EE-B7DF-7896AD8F922B',
                'name' => 'June Carter Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'slug' => 'justin-bieber-impersonators',
                'guid' => '4B9086B1-D2C2-43DE-8493-9E929C60D25C',
                'name' => 'Justin Bieber Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'slug' => 'karaoke-bands',
                'guid' => '813AE9B2-30E5-495A-85A0-6CA7E9B66374',
                'name' => 'Karaoke Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'slug' => 'karaoke-djs',
                'guid' => '835BB662-7A19-46BF-85C2-64F3C46BB863',
                'name' => 'Karaoke DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'slug' => 'karaoke-singers',
                'guid' => '582CDFB2-38FA-424C-A9B4-F8310122AEBF',
                'name' => 'Karaoke Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'slug' => 'karen-carpenter-tribute-artists',
                'guid' => 'DA560F11-C19E-4B45-AAEB-3AE2E048C9BC',
                'name' => 'Karen Carpenter Tribute Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'slug' => 'kathy-griffin-impersonators',
                'guid' => 'D13F1127-2797-4BC9-81C4-69CF0B64F2CB',
                'name' => 'Kathy Griffin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'slug' => 'katy-perry-impersonators',
                'guid' => 'E41BFE51-B70E-4D22-BE5C-4A570E6CEF42',
                'name' => 'Katy Perry Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'slug' => 'kenny-rogers-impersonators',
                'guid' => '8268594F-4D3F-4869-9722-6CCF68687BF0',
                'name' => 'Kenny Rogers Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'slug' => 'keyboards',
                'guid' => '86EF49C8-B17C-4F5E-AD77-5A3075BC4CD8',
                'name' => 'Keyboards',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'slug' => 'keynote-speakers',
                'guid' => '35DAC46E-D891-4726-95F4-63B1845872FE',
                'name' => 'Keynote Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'slug' => 'kiss-tribute-bands',
                'guid' => '10ECC143-1023-498F-8D22-BC9AB86B9FAE',
                'name' => 'KISS Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'slug' => 'kitchen-staff',
                'guid' => '49A36829-55DB-4418-8B31-E068FB376566',
                'name' => 'Kitchen Staff',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'slug' => 'klezmer-bands',
                'guid' => '02B2AEE6-8E72-4234-A014-2C1C62D0F47F',
                'name' => 'Klezmer Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'slug' => 'knife-throwers',
                'guid' => 'F98A8984-41E5-4A6C-B2E9-0DA0FDF6061D',
                'name' => 'Knife Throwers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'slug' => 'kosher-caterers',
                'guid' => '15E08362-22B4-4A43-8677-9EBDD7B3BB96',
                'name' => 'Kosher Caterers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'slug' => 'lady-gaga-impersonators',
                'guid' => '07A8D836-4CCC-47A9-ABB4-4F4873BC25A4',
                'name' => 'Lady Gaga Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'slug' => 'laser-shows',
                'guid' => '786F2476-BA35-4C3F-B711-0DDA6D215C3F',
                'name' => 'Laser Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'slug' => 'laser-tag-parties',
                'guid' => 'A168D206-0B7F-4FF9-8B3C-537973F7D78B',
                'name' => 'Laser Tag Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'slug' => 'latin-acoustic-guitar',
                'guid' => '6439D2CD-56F3-421A-9A88-2F56386FF5C7',
                'name' => 'Latin Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'slug' => 'latin-bands',
                'guid' => '0137A5BB-B052-4ABF-958F-0A2AE58AC5D5',
                'name' => 'Latin Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'slug' => 'latin-dancers',
                'guid' => 'F43456EB-BD08-40EF-8DCD-E061BD7C682F',
                'name' => 'Latin Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'slug' => 'latin-djs',
                'guid' => '9DF538F1-20C6-4A54-92E6-8039D19F9CD3',
                'name' => 'Latin DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'slug' => 'latin-duos',
                'guid' => 'F22EEB79-456B-43AD-9AAE-A31475E182F4',
                'name' => 'Latin Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'slug' => 'latin-guitar',
                'guid' => 'A1F196A1-4345-4300-BC46-3DFC86CAA4CB',
                'name' => 'Latin Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'slug' => 'latin-jazz-bands',
                'guid' => '10D11C34-07CD-4C8B-8148-44EB00A7DE13',
                'name' => 'Latin Jazz Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'slug' => 'latin-piano',
                'guid' => '948F3007-F5F9-43FA-A9C1-1FCA2FCA5386',
                'name' => 'Latin Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'slug' => 'latin-singers',
                'guid' => '872C7C69-41B9-4FF0-AB20-A8D3801E2C6E',
                'name' => 'Latin Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'slug' => 'latin-trios',
                'guid' => '20F0B506-CF5A-472E-9F0C-2AF6B83E378F',
                'name' => 'Latin Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'slug' => 'led-zeppelin-tribute-bands',
                'guid' => '9A84242C-F0AF-44F7-ADA3-9EE05C8269F3',
                'name' => 'Led Zeppelin Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'slug' => 'leonardo-dicaprio-impersonators',
                'guid' => 'D9D26115-7810-4F59-A30D-DD18AF78BC32',
                'name' => 'Leonardo DiCaprio Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'slug' => 'lighting',
                'guid' => 'F0775728-96B7-411A-BE16-15461F2B78B1',
                'name' => 'Lighting',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'slug' => 'limousines',
                'guid' => '93D01373-867B-452D-8B4C-5F600D00DC42',
                'name' => 'Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'slug' => 'linens-chair-covers',
                'guid' => '422C183E-B389-4046-A1E6-CF0D8419AF74',
                'name' => 'Linens/Chair Covers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'slug' => 'live-bands',
                'guid' => '6EACE2B4-1DF2-417C-BD29-4AEC5483C5D7',
                'name' => 'Live Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'slug' => 'liza-minnelli-impersonators',
                'guid' => 'C2229C5B-7841-4AFE-BAB3-BFC994281FA1',
                'name' => 'Liza Minnelli Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'slug' => 'll-cool-j-impersonators',
                'guid' => 'F5BC666F-3EA6-44D3-B63B-CCEA1E6037ED',
                'name' => 'LL Cool J Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'slug' => 'lookalikes',
                'guid' => 'A98DE75D-53A2-4998-A9A1-169F622532AD',
                'name' => 'Lookalikes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'slug' => 'loretta-lynn-impersonators',
                'guid' => '9FCA20FD-0B85-4B46-96C1-761E6FF9012B',
                'name' => 'Loretta Lynn Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'slug' => 'louis-armstrong-tribute-acts',
                'guid' => '786F7998-24A8-427A-A275-F2B9360C45A4',
                'name' => 'Louis Armstrong Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'slug' => 'lucille-ball-impersonators',
                'guid' => '907BF438-8782-40FF-94F7-C0A2A138198C',
                'name' => 'Lucille Ball Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'slug' => 'luxury-limousines',
                'guid' => '75E77577-1714-4B44-B5BD-DFCC280DDB4B',
                'name' => 'Luxury Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'slug' => 'lynyrd-skynyrd-tribute-bands',
                'guid' => '2885CA84-C1B4-43A0-BDD4-F614FD1E381D',
                'name' => 'Lynyrd Skynyrd Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'slug' => 'madonna-impersonators',
                'guid' => 'CBCF964B-D72E-408D-A015-B9E7AD0E1DBE',
                'name' => 'Madonna Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'slug' => 'mae-west-impersonators',
                'guid' => 'CAA82020-BE47-4E8F-99F9-EA74AD31219F',
                'name' => 'Mae West Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'slug' => 'magic-and-illusion',
                'guid' => '0141E71A-4C75-40F0-8018-C7FC7CABD078',
                'name' => 'Magic and Illusion',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'slug' => 'magicians',
                'guid' => '44416B07-E848-432C-85F0-2C58F6070FCA',
                'name' => 'Magicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'slug' => 'makeup-artists',
                'guid' => '28E28F2C-51F7-4F0D-96B9-92D7FA8A43A5',
                'name' => 'Makeup Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'slug' => 'male-models',
                'guid' => '24C79C34-F753-4E8F-B10E-B7CC42507260',
                'name' => 'Male Models',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'slug' => 'mandolin',
                'guid' => '9DBF6507-3CD8-4074-9AC3-C8988C2BFBD4',
                'name' => 'Mandolin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'slug' => 'mandolin-players',
                'guid' => '45FDB8D1-5DCA-41A3-A9D2-9183024E1B51',
                'name' => 'Mandolin Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'slug' => 'marching-bands',
                'guid' => 'EC1C68FF-9570-426F-94A0-268B0255FF30',
                'name' => 'Marching Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'slug' => 'mardi-gras-entertainment',
                'guid' => '029AAEC9-D826-45DD-BADE-5DD850A24725',
                'name' => 'Mardi Gras Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'slug' => 'mariachi-bands',
                'guid' => '6680B3ED-F4CB-4579-9CB1-DF1DA215629F',
                'name' => 'Mariachi Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'slug' => 'mariachi-duos',
                'guid' => 'B47C40A6-036E-47DA-9835-65A62F5CA95C',
                'name' => 'Mariachi Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'slug' => 'mariachi-guitar',
                'guid' => '74926E96-E71D-4162-8522-D7E7A40366E1',
                'name' => 'Mariachi Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'slug' => 'mariachi-singers',
                'guid' => '1F6EDAE6-287E-483A-8C5D-14E3FCCFD3DB',
                'name' => 'Mariachi Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'slug' => 'mariachi-trios',
                'guid' => 'CFB3A178-0763-4FF9-A7C6-D81712397BE8',
                'name' => 'Mariachi Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'slug' => 'marilyn-monroe-impersonators',
                'guid' => '6528997E-3F9A-4272-BFDB-642BCB6AD6C0',
                'name' => 'Marilyn Monroe Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'slug' => 'mark-twain-impersonators',
                'guid' => '55A0CA20-842B-47E0-8E6B-AD0184E05FB1',
                'name' => 'Mark Twain Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'slug' => 'martha-stewart-impersonators',
                'guid' => 'A23CED81-620C-4B1D-BE9A-D50C764A3D43',
                'name' => 'Martha Stewart Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'slug' => 'martin-and-lewis-tributes',
                'guid' => '1485D5B2-B0F3-4181-8631-C96A1A5E8360',
                'name' => 'Martin & Lewis Tributes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'slug' => 'mechanical-bull-riding',
                'guid' => 'EB8C18B2-B365-4E2E-B5FC-EEE8EC699DC0',
                'name' => 'Mechanical Bull Riding',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'slug' => 'medieval-entertainment',
                'guid' => '96DA3138-99CC-469F-A0D2-0DCC8DE1DE42',
                'name' => 'Medieval Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'slug' => 'meditational-acoustic-guitar',
                'guid' => '9D1316E3-05CE-474C-ADE2-22B9A9DFDAA4',
                'name' => 'Meditational Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'slug' => 'meditational-guitar',
                'guid' => '48638769-E7BD-4048-BA88-CDE0EBE09A0C',
                'name' => 'Meditational Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'slug' => 'meditational-harp',
                'guid' => '650549B3-0A40-4246-AB9D-7B36022317CD',
                'name' => 'Meditational Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'slug' => 'mentalists',
                'guid' => '37AC9439-179B-4693-BCB0-1DC8FF0CBCF1',
                'name' => 'Mentalists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'slug' => 'merengue-acoustic-guitar',
                'guid' => '4A570D20-1C92-4062-8B35-194FF33BC075',
                'name' => 'Merengue Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'slug' => 'merengue-bands',
                'guid' => 'B79CB1CD-2BE4-4D2A-B344-E707BCC9AFD9',
                'name' => 'Merengue Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'slug' => 'merle-haggard-tribute-acts',
                'guid' => '7B599E8E-1EB8-4A88-A96A-88C5BE6F6C8D',
                'name' => 'Merle Haggard Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'slug' => 'mermaids',
                'guid' => '68BEB83F-85A0-453E-B7CA-EBC905857E70',
                'name' => 'Mermaids',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'slug' => 'metal-bands',
                'guid' => 'B3A08B97-6EC2-4112-AF83-6B52025CF984',
                'name' => 'Metal Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'slug' => 'metallica-tribute-bands',
                'guid' => 'E378158C-4ABC-4839-96AE-3F71C960F2DA',
                'name' => 'Metallica Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'slug' => 'michael-buble-tribute-acts',
                'guid' => 'CBE242F5-B221-4936-B8A4-3FFA16951260',
                'name' => 'Michael Buble Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'slug' => 'michael-jackson-impersonators',
                'guid' => '4AE5F159-8AD1-4EF3-8D6C-1739D70BD658',
                'name' => 'Michael Jackson Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'slug' => 'michelle-obama-impersonators',
                'guid' => 'FAA51C18-8BAF-4190-989B-39F97763292A',
                'name' => 'Michelle Obama Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'slug' => 'middle-eastern-bands',
                'guid' => 'DADED11A-61B9-4C0F-A516-0E699987914E',
                'name' => 'Middle Eastern Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'slug' => 'middle-eastern-dancers',
                'guid' => '1C8983AA-A768-4611-8C02-ECE505C3F727',
                'name' => 'Middle Eastern Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'slug' => 'middle-eastern-entertainment',
                'guid' => '8AE0820A-43E4-4E6F-8F9F-DA8340D646B1',
                'name' => 'Middle Eastern Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'slug' => 'mime',
                'guid' => '7BE9B17A-D798-45C5-A555-2D84828BC87B',
                'name' => 'MIME',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'slug' => 'mimes',
                'guid' => '1537124E-8F40-4617-9EBA-C93B3F5EB0E3',
                'name' => 'Mimes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'slug' => 'mind-readers',
                'guid' => '12E82C8D-4F8D-4DB6-AC92-6CC10DEB840F',
                'name' => 'Mind Readers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'slug' => 'mobile-djs',
                'guid' => '19ADA992-63D2-46C7-8427-32592CAAF021',
                'name' => 'Mobile DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'slug' => 'mobile-game-activities',
                'guid' => '8D010F92-8572-4080-82C0-B4F89703FFAD',
                'name' => 'Mobile Game Activities',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'slug' => 'mobile-massages',
                'guid' => '7F001102-825D-45AB-8AE0-A7D58D683806',
                'name' => 'Mobile Massages',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'slug' => 'models-actors',
                'guid' => 'C5A6DC82-AD50-4192-B01F-813A5DCD485D',
                'name' => 'Models/Actors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'slug' => 'modern-dancers',
                'guid' => '1B3E0930-CC8B-45E2-AE24-B8325CC062D0',
                'name' => 'Modern Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'slug' => 'moody-blues-tribute-bands',
                'guid' => '72A0B128-72D1-4E4B-B675-97B7840B3E38',
                'name' => 'Moody Blues Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'slug' => 'moon-bounce',
                'guid' => 'E08928E6-368B-4E9C-85D3-2FDF6903C88D',
                'name' => 'Moon Bounce',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'slug' => 'motivational-speakers',
                'guid' => '7FD09708-029C-47BB-99AB-ACF98499E4CB',
                'name' => 'Motivational Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'slug' => 'motley-crue-tribute-bands',
                'guid' => '7E242B80-B586-487B-96C0-B7B5D1D64923',
                'name' => 'Motley Crue Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'slug' => 'motown-bands',
                'guid' => '6A2D43A6-E92D-4955-B893-0E6A43668599',
                'name' => 'Motown Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'slug' => 'motown-groups',
                'guid' => '39FDCC66-A782-436E-8BCE-E383823B21EB',
                'name' => 'Motown Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'slug' => 'motown-singers',
                'guid' => '3F69229D-F2B7-427C-BF8A-6936F43984B7',
                'name' => 'Motown Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'slug' => 'mountain-man',
                'guid' => '8617E464-21FB-4A6F-8F15-9F3AEEAFDAB4',
                'name' => 'Mountain Man',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'slug' => 'movie-and-tv-impersonators',
                'guid' => 'BA8ECD49-2F33-4C8C-AEB2-0CBE4A00D51B',
                'name' => 'Movie and TV Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'slug' => 'movie-theme-parties',
                'guid' => '6C472643-ABBA-4300-924F-64D870360FE9',
                'name' => 'Movie Theme Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'slug' => 'murder-mystery-entertainment',
                'guid' => 'EE2622EB-00A0-4F62-85C9-9B0CEAC569AF',
                'name' => 'Murder Mystery Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'slug' => 'murder-mystery-events',
                'guid' => 'F7828159-696E-4F45-86D0-ECC080DF0156',
                'name' => 'Murder Mystery Events',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'slug' => 'music-celebrity-impersonators',
                'guid' => 'C683C9D7-5992-4CD0-8AA6-32D8DB936292',
                'name' => 'Music Celebrity Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'slug' => 'music-entertainment',
                'guid' => '9CF65AC3-E978-49A7-A720-4933CC4C11AD',
                'name' => 'Music Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'slug' => 'musical-comedy-acts',
                'guid' => '56843FAC-6242-4ABF-AEC6-F3CFA2C1A0AB',
                'name' => 'Musical Comedy Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'slug' => 'musicians',
                'guid' => 'BBA127E5-5857-4BEB-8A64-74EAB72B76B8',
                'name' => 'Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'slug' => 'narrators',
                'guid' => 'C7400863-1903-4D67-B02D-A5926FB2863B',
                'name' => 'Narrators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'slug' => 'nat-king-cole-impersonators',
                'guid' => '8840B734-59BF-47E5-AD82-184A7C646D98',
                'name' => 'Nat King Cole Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'slug' => 'native-american-entertainment',
                'guid' => '990618E4-1A4B-47FC-B631-C5E42DAB7387',
                'name' => 'Native American Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'slug' => 'neil-diamond-impersonators',
                'guid' => 'A7C6114B-EE5A-417E-9818-33769DC7720D',
                'name' => 'Neil Diamond Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'slug' => 'neil-young-tribute-acts',
                'guid' => '33E615BF-4E89-41DA-8868-5A6D366A9EEB',
                'name' => 'Neil Young Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'slug' => 'new-age-bands',
                'guid' => 'CBB0E010-7A4B-42CF-AE1A-FCA24C4D129C',
                'name' => 'New Age Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'slug' => 'new-age-guitar',
                'guid' => '8433AC3C-2480-4CA7-9FF2-CC411FAF41E7',
                'name' => 'New Age Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'slug' => 'new-age-singers',
                'guid' => '632EFD9D-0285-45C9-8E9D-0A9DB2BC70A4',
                'name' => 'New Age Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'slug' => 'new-orleans-style-entertainment',
                'guid' => '176FE324-CFB4-4AF7-8D5B-7EF824E3641A',
                'name' => 'New Orleans Style Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'slug' => 'nirvana-tribute-bands',
                'guid' => '031F091D-2456-45E0-9D11-A4F7858A07E6',
                'name' => 'Nirvana Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'slug' => 'officiants',
                'guid' => 'E40BC8D7-0A43-4F3B-B2CC-521586BF5EA1',
                'name' => 'Officiants',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'slug' => 'oktoberfest-music',
                'guid' => 'FCCFE7DC-9FD9-4A44-B2D2-7C91FBC00624',
                'name' => 'Oktoberfest Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'slug' => 'oldies-a-cappella-groups',
                'guid' => '0F06B25B-8E9E-42C1-ABD6-E4A84018A509',
                'name' => 'Oldies A Cappella Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'slug' => 'oldies-acoustic-guitar',
                'guid' => '66FCB4B7-8DB3-4E45-9E20-131A8EBA0C92',
                'name' => 'Oldies Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'slug' => 'oldies-bands',
                'guid' => 'BB0EC3BC-86E8-4B05-8FA7-EF686A08DE0B',
                'name' => 'Oldies Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'slug' => 'oldies-barbershop-quartets',
                'guid' => 'BCFB5F9C-477B-4279-BA00-7A7003A745CF',
                'name' => 'Oldies Barbershop Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'slug' => 'oldies-chorus',
                'guid' => '8AE83B7E-2539-4D45-B4ED-5C1714C265F8',
                'name' => 'Oldies Chorus',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'slug' => 'oldies-dueling-pianos',
                'guid' => '1171CCF4-5F6B-4746-A88A-8BF36F7D3085',
                'name' => 'Oldies Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'slug' => 'oldies-duos',
                'guid' => 'AA72F585-2187-40F6-89BD-3A531E018C08',
                'name' => 'Oldies Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'slug' => 'oldies-groups',
                'guid' => 'DA610114-F274-439A-8EB4-A01C9F44D2B5',
                'name' => 'Oldies Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'slug' => 'oldies-guitar',
                'guid' => 'BE1023C2-3089-4CEB-A3CD-0112DA695FF4',
                'name' => 'Oldies Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'slug' => 'oldies-piano',
                'guid' => '4D52A1F7-C55C-4E7C-89C4-0BDC24C03AF2',
                'name' => 'Oldies Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'slug' => 'oldies-singers',
                'guid' => 'A7490673-B4DE-4477-B6D0-6F2552FCD236',
                'name' => 'Oldies Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'slug' => 'oldies-tribute-shows',
                'guid' => '65E2833A-53BC-4114-85F2-9BDF3076E8AF',
                'name' => 'Oldies Tribute Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'slug' => 'oldies-trios',
                'guid' => '715A7DC0-74B5-4113-8C32-D393A5D1D003',
                'name' => 'Oldies Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'slug' => 'one-man-bands',
                'guid' => 'A4EA2A00-3D41-4FF2-9902-885D906F379F',
                'name' => 'One Man Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'slug' => 'opera-singers',
                'guid' => '872E93B0-E7AD-470B-92FA-B1C1BDB47405',
                'name' => 'Opera Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'slug' => 'oprah-winfrey-impersonators',
                'guid' => '354E36DE-47D0-4C1A-AC99-258A2529DEFB',
                'name' => 'Oprah Winfrey Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'slug' => 'orchestras',
                'guid' => 'BC72D3E0-6D49-437D-820C-C7E482D361A9',
                'name' => 'Orchestras',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'slug' => 'organ',
                'guid' => '20D0C567-5150-4390-819D-DDFC950DA469',
                'name' => 'Organ',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'slug' => 'origami-artists',
                'guid' => '976635AA-C646-4C27-BDA1-1589A1CFA7CF',
                'name' => 'Origami Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'slug' => 'original-bands',
                'guid' => 'ED0EDD54-EE7E-4D5B-A123-9C9C09F900F3',
                'name' => 'Original Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'slug' => 'outdoor-movies',
                'guid' => 'F27E677F-AE1F-4B19-B3C5-FB6DBB03FBC2',
                'name' => 'Outdoor Movies',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'slug' => 'outdoor-parties',
                'guid' => '1562A35B-2A8D-4EBF-B366-D0B82CA2BE21',
                'name' => 'Outdoor Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'slug' => 'ozzy-osbourne-impersonators',
                'guid' => '08780C75-2DED-4C09-B739-8E1385CA9AC6',
                'name' => 'Ozzy Osbourne Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'slug' => 'palm-readers',
                'guid' => 'B9E93D64-115E-4868-9417-455F9EBF2248',
                'name' => 'Palm Readers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'slug' => 'paris-hilton-impersonators',
                'guid' => '18F0605E-32D3-4E4E-BA05-214B3F7237C1',
                'name' => 'Paris Hilton Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'slug' => 'parties-and-rentals',
                'guid' => 'FB3FB750-BB32-4531-A39A-70F52EA722B8',
                'name' => 'Parties and Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'slug' => 'party-bands',
                'guid' => '6A22CD89-30AE-44BA-A1FF-D396691EE5F3',
                'name' => 'Party Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'slug' => 'party-buses',
                'guid' => '494DF769-3EA2-4900-8EE2-D6260AF9F311',
                'name' => 'Party Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'slug' => 'party-decor',
                'guid' => '721F1E96-EBA9-4718-9FED-263A9A5C5B23',
                'name' => 'Party Decor',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'slug' => 'party-djs',
                'guid' => '78A31A2D-D7CF-4DF6-966E-A2E5E4FAA809',
                'name' => 'Party DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'slug' => 'party-entertainment',
                'guid' => '4D7E182C-27B5-4989-A265-B2A2AE25B4ED',
                'name' => 'Party Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'slug' => 'party-favors',
                'guid' => '7875A4FA-1957-432D-B84E-3F4D4A8D00B8',
                'name' => 'Party Favors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'slug' => 'party-inflatables',
                'guid' => '0E3FC565-3FDD-4CF0-9308-07BEBB734750',
                'name' => 'Party Inflatables',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'slug' => 'party-limousines',
                'guid' => '1BE80757-2288-4AE2-8BD4-DAF5F9DFC14C',
                'name' => 'Party Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'slug' => 'party-rentals',
                'guid' => '6D87AD11-BEDE-4405-A197-6C84F0A70044',
                'name' => 'Party Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'slug' => 'party-robots',
                'guid' => 'E7F34948-5238-4CD1-AE9F-9821378409BA',
                'name' => 'Party Robots',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'slug' => 'party-tent-rentals',
                'guid' => '9B9AF4E9-241D-4E85-B256-628CA90948AB',
                'name' => 'Party Tent Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'slug' => 'party-transportation-buses',
                'guid' => 'EAC6C413-6D81-4A70-A9B5-6D192576FF1A',
                'name' => 'Party Transportation Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'slug' => 'pat-benetar-tribute-bands',
                'guid' => '63ADE1F7-FC0F-4E0B-BAF9-171345BD4AC5',
                'name' => 'Pat Benetar Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'slug' => 'patrick-stewart-impersonators',
                'guid' => '8A1ADD0F-78AD-4024-8243-A7D19FC3938A',
                'name' => 'Patrick Stewart Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'slug' => 'patriotic-bands',
                'guid' => '5F6F128A-C3EC-4B8C-91F2-087084E62001',
                'name' => 'Patriotic Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'slug' => 'patsy-cline-impersonators',
                'guid' => '7128A972-C80B-43F8-968D-C1D6C6EFE229',
                'name' => 'Patsy Cline Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'slug' => 'paul-mccartney-impersonators',
                'guid' => 'FF2E26B6-8551-4778-86D5-DEB7324D449F',
                'name' => 'Paul McCartney Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'slug' => 'paul-simon-tribute-acts',
                'guid' => 'C5DC6EE6-3294-42D4-8C5D-6B5490447494',
                'name' => 'Paul Simon Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'slug' => 'pearl-jam-tribute-bands',
                'guid' => '5DEB27FC-2135-438C-9ED7-B7F818D12175',
                'name' => 'Pearl Jam Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'slug' => 'peggy-lee-tribute-artists',
                'guid' => '4A5F6EFA-E149-458B-B512-B525C5DC4717',
                'name' => 'Peggy Lee Tribute Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'slug' => 'percussion',
                'guid' => 'FE176D39-DB24-41F3-9CD5-F12D21F70121',
                'name' => 'Percussion',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'slug' => 'percussion-ensembles',
                'guid' => 'D2973968-3EE3-4AD8-8597-E9851B220706',
                'name' => 'Percussion Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'slug' => 'percussion-shows',
                'guid' => '882BF836-D59E-4E87-94F5-8D210001FBAF',
                'name' => 'Percussion Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'slug' => 'personal-chefs',
                'guid' => '3770F988-0D75-45AF-81BB-666A2E343058',
                'name' => 'Personal Chefs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'slug' => 'personal-shoppers',
                'guid' => 'BD3EB8D1-931D-4719-BB50-210CD33EC173',
                'name' => 'Personal Shoppers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'slug' => 'personal-stylists',
                'guid' => 'B521C46F-2706-4F34-A559-C7B02F64780C',
                'name' => 'Personal Stylists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'slug' => 'peter-paul-and-mary-tribute-bands',
                'guid' => 'F8D617A6-2CFD-4E4E-97F1-938FEB0995CD',
                'name' => 'Peter, Paul and Mary Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'slug' => 'petting-zoos',
                'guid' => 'C697569D-857C-4F08-A550-2D12A2118E86',
                'name' => 'Petting Zoos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'slug' => 'phil-collins-tribute-acts',
                'guid' => '2B1501B1-3576-4180-BAEA-2FBBD0D17E05',
                'name' => 'Phil Collins Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'slug' => 'photo-booth-rentals',
                'guid' => 'D1FBBFA4-38B5-4130-BE02-637ECA69B65F',
                'name' => 'Photo Booth Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'slug' => 'photo-booths',
                'guid' => '5B622834-65B5-4DA2-8F9E-3406F54B8276',
                'name' => 'Photo Booths',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'slug' => 'photo-journalists',
                'guid' => '444A6D8F-1570-4568-933C-4C6BA27FEBCB',
                'name' => 'Photo Journalists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'slug' => 'photographer-services',
                'guid' => '852C5FB8-D668-4F85-B80F-9B05470B2290',
                'name' => 'Photographer Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'slug' => 'photographers',
                'guid' => '6F717874-0933-40F8-A34F-E6D1CF920853',
                'name' => 'Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'slug' => 'piano',
                'guid' => 'F732BD16-290A-43B5-AA90-447F7937429B',
                'name' => 'Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'slug' => 'pickpockets',
                'guid' => '453CF94C-6CA2-4958-8408-9E91DBD60E48',
                'name' => 'Pickpockets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'slug' => 'pink-floyd-tribute-bands',
                'guid' => 'E7C5F97D-A9AB-4D13-B271-3CCD6C0E4E40',
                'name' => 'Pink Floyd Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'slug' => 'pirate-parties',
                'guid' => 'EEB3FC5C-B158-4ED1-9F26-34216B83B151',
                'name' => 'Pirate Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'slug' => 'pirate-party',
                'guid' => '0E365D14-EF92-435C-93D1-2B9E08DB4452',
                'name' => 'Pirate Party',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'slug' => 'plate-spinners',
                'guid' => 'A2F49BA0-33BB-42E9-B2B9-70E2EFBED69B',
                'name' => 'Plate Spinners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'slug' => 'pole-dancers',
                'guid' => '90AEE9CD-0635-4D8B-9909-5D3597993F13',
                'name' => 'Pole Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'slug' => 'police-tribute-bands',
                'guid' => '345C8140-CD26-4F16-87BB-32BF8F578916',
                'name' => 'Police Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'slug' => 'polish-entertainment',
                'guid' => 'CA80C85A-684D-4649-9768-808A46FA1860',
                'name' => 'Polish Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'slug' => 'political-impersonators',
                'guid' => 'DFA125B6-0F23-4F84-BC75-985377287A85',
                'name' => 'Political Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'slug' => 'political-lookalikes',
                'guid' => 'F0988980-38BF-494A-A931-91368B3D8AE4',
                'name' => 'Political Lookalikes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'slug' => 'political-speakers',
                'guid' => '8C35CF43-0EB7-4451-98E6-C9F04A4EE6C8',
                'name' => 'Political Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'slug' => 'polka-bands',
                'guid' => '45D26831-0EA3-4216-84E8-496DF852126D',
                'name' => 'Polka Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'slug' => 'polka-dancers',
                'guid' => '98097C7A-7FA7-4E7D-BA22-BA1BF9F127B4',
                'name' => 'Polka Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'slug' => 'polynesian-dancers',
                'guid' => '0543BB74-B6C9-4C7F-9FCE-B372DCFC9E61',
                'name' => 'Polynesian Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'slug' => 'polynesian-entertainment',
                'guid' => 'F8141920-E7B1-4FD9-970A-00131EE7518B',
                'name' => 'Polynesian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'slug' => 'pony-parties',
                'guid' => '61992266-9E7A-4B9C-9674-2CDCA4996931',
                'name' => 'Pony Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'slug' => 'pony-rides',
                'guid' => '029D0F96-AE88-43FD-A026-70908C542D40',
                'name' => 'Pony Rides',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'slug' => 'pop-acoustic-guitar',
                'guid' => '2051B56A-785E-4CD3-84AD-0AB861A206C0',
                'name' => 'Pop Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'slug' => 'pop-bands',
                'guid' => 'B691A2E3-B53C-43A4-AB5A-F64400368803',
                'name' => 'Pop Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'slug' => 'pop-dueling-pianos',
                'guid' => '2719BB5A-365A-43D2-A28D-F1348763837B',
                'name' => 'Pop Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'slug' => 'pop-duos',
                'guid' => 'DF68115A-A67A-4B1B-9D51-876570ABB4A1',
                'name' => 'Pop Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'slug' => 'pop-guitar',
                'guid' => 'D0F438EE-6B84-474C-B1F2-A13679ECA043',
                'name' => 'Pop Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'slug' => 'pop-harp',
                'guid' => '51D39229-5DB1-4FED-B4DB-A60F29CC58F6',
                'name' => 'Pop Harp',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'slug' => 'pop-piano',
                'guid' => '5E95C46D-28F4-452C-8DD5-2BAE2D1D9BFA',
                'name' => 'Pop Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'slug' => 'pop-singers',
                'guid' => 'C8747B6D-FA2B-4355-9CDF-D5EAD6404886',
                'name' => 'Pop Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'slug' => 'pop-string-quartets',
                'guid' => 'EC6B5A4A-B3E5-4319-8C77-DAD6C3CF9483',
                'name' => 'Pop String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'slug' => 'pop-trios',
                'guid' => '9B73F237-A23E-477F-8452-54EE6739079F',
                'name' => 'Pop Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'slug' => 'portable-floors-and-stages',
                'guid' => '093DD5C2-F845-4BB6-995F-9D46456A7D03',
                'name' => 'Portable Floors and Stages',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'slug' => 'portable-toilets',
                'guid' => '0FE0975A-1CA3-4674-8F75-EB1DF3F8865D',
                'name' => 'Portable Toilets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'slug' => 'portrait-photographers',
                'guid' => 'A83816F1-6CBF-4E01-998B-6DA00ECC5012',
                'name' => 'Portrait Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'slug' => 'presidential-impersonators',
                'guid' => '71403D45-BDDB-4790-B3C6-0933F6A5DA26',
                'name' => 'Presidential Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'slug' => 'prince-tribute-acts',
                'guid' => '669DE125-3ACE-4BE7-9B5D-1CE91BFEF0B7',
                'name' => 'Prince Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'slug' => 'prince-tribute-bands',
                'guid' => 'C7A3E90B-2FDC-403C-A6B4-E30152BF5999',
                'name' => 'Prince Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'slug' => 'princess-parties',
                'guid' => 'E29D91B3-09E2-4088-9E2C-A0911467E3E3',
                'name' => 'Princess Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'slug' => 'princess-party',
                'guid' => 'D20129DC-9CC7-40F4-A63F-2867EDAE28F7',
                'name' => 'Princess Party',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'slug' => 'production-solutions',
                'guid' => '72DDA977-2FC5-434D-BD3E-AA17F2E4967E',
                'name' => 'Production Solutions',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'slug' => 'professional-services',
                'guid' => 'F6F94C86-869B-4FDC-84CE-A28CA9BE3F27',
                'name' => 'Professional Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'slug' => 'prom-buses',
                'guid' => '610D1B3F-9950-40D2-95B7-BB826FEFB758',
                'name' => 'Prom Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'slug' => 'prom-djs',
                'guid' => '349802C9-51BA-4292-B040-F492CFF9C31F',
                'name' => 'Prom DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'slug' => 'prom-limousines',
                'guid' => '3E18DE26-9189-486D-A692-59C2EDA71C1D',
                'name' => 'Prom Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'slug' => 'props',
                'guid' => '02976915-2169-4812-ABC2-D876F6A684F6',
                'name' => 'Props',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'slug' => 'props-for-parties',
                'guid' => 'DAC21286-9234-4226-8A9A-192B082006DA',
                'name' => 'Props for Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'slug' => 'psychics',
                'guid' => '50160B1B-3DDF-4527-896C-8BBEC88F01F1',
                'name' => 'Psychics',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'slug' => 'psychics-entertainment',
                'guid' => 'D224C174-00DD-4EA6-8A49-88A8EC3850DD',
                'name' => 'Psychics Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'slug' => 'public-speakers',
                'guid' => '4BE80115-756B-4BD5-914D-1A50EF337339',
                'name' => 'Public Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'slug' => 'public-speaking',
                'guid' => '1ED832CA-FCCB-4B2A-8F78-64AFC6306DC3',
                'name' => 'Public Speaking',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'slug' => 'punk-bands',
                'guid' => '1413CE20-5227-458E-879C-B44834728651',
                'name' => 'Punk Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'slug' => 'punk-singers',
                'guid' => '711EBBD4-780C-46EF-8536-CE7369D587D5',
                'name' => 'Punk Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'slug' => 'puppet-shows',
                'guid' => '664C6B30-E4F0-41EB-9BA3-2B3420E531B7',
                'name' => 'Puppet Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'slug' => 'pyrotechnics',
                'guid' => '2A401585-79B1-41B9-BBE7-D04D7EEA73F1',
                'name' => 'Pyrotechnics',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'slug' => 'queen-tribute-bands',
                'guid' => '49C12734-5EA6-4F05-B182-8F6C49E71C73',
                'name' => 'Queen Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'slug' => 'queensryche-tribute-bands',
                'guid' => '9B11727C-727B-48AF-8AB8-45987758E924',
                'name' => 'Queensryche Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'slug' => 'radio-djs',
                'guid' => 'F748D342-7F04-4AB5-A605-5E1F80E075AE',
                'name' => 'Radio DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'slug' => 'ragtime-bands',
                'guid' => '49DFB6E6-C8CC-4392-B68B-F32C2978A4F2',
                'name' => 'Ragtime Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'slug' => 'ragtime-piano',
                'guid' => '6139F80F-B803-4AC4-8737-EB0C71162B03',
                'name' => 'Ragtime Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'slug' => 'randb-bands',
                'guid' => '4D39DBD7-2B81-4C40-B658-8CDE690A099B',
                'name' => 'R&B Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'slug' => 'randb-duos',
                'guid' => '839B7CF8-1A36-4C96-883C-E293DE63EA55',
                'name' => 'R&B Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'slug' => 'randb-guitar',
                'guid' => '6DD743DF-D95A-4C8E-9D64-B0E498DD952B',
                'name' => 'R&B Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'slug' => 'randb-singers',
                'guid' => '2727D959-D658-4334-937B-AD0301081E17',
                'name' => 'R&B Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'slug' => 'randb-trios',
                'guid' => 'E617B272-9DE3-4A6D-B57C-55BEA438436F',
                'name' => 'R&B Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'slug' => 'rap-bands',
                'guid' => '59EB6F56-8220-4F80-89D2-7C976F17B84E',
                'name' => 'Rap Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'slug' => 'rap-groups',
                'guid' => '4AB9C45E-4C20-407E-9492-056B3F575E71',
                'name' => 'Rap Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'slug' => 'rappers',
                'guid' => '72110878-5059-4C01-BE80-85F3C5E0D83E',
                'name' => 'Rappers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'slug' => 'rat-pack-tribute-shows',
                'guid' => 'C3CB72AD-6F4C-4EAC-9000-46048955079C',
                'name' => 'Rat Pack Tribute Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'slug' => 'ray-charles-impersonators',
                'guid' => '31D28765-AE99-46C5-8DCC-AF6CDFE32E35',
                'name' => 'Ray Charles Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'slug' => 'red-skelton-impersonators',
                'guid' => 'F95F9C0D-F7AB-4EB1-9362-9C2DFC2CCACE',
                'name' => 'Red Skelton Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'slug' => 'reggae-bands',
                'guid' => '4BA3B7B7-9A52-45AF-BCDA-3198FAB1219B',
                'name' => 'Reggae Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'slug' => 'reggae-guitar',
                'guid' => '1775665C-6D6E-4B04-952E-A13CFC5911CB',
                'name' => 'Reggae Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'slug' => 'reggae-singers',
                'guid' => '9C4AEE13-091E-40E5-9444-CEE20A8179B3',
                'name' => 'Reggae Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'slug' => 'renaissance-entertainment',
                'guid' => '11B64926-B2D8-4112-A777-9F40933DDF2F',
                'name' => 'Renaissance Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'slug' => 'reptile-shows',
                'guid' => '84287391-C015-40A0-AF4D-98F384CE4C64',
                'name' => 'Reptile Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'slug' => 'richard-nixon-impersonators',
                'guid' => '8175E870-C2DA-4ED8-BA5E-961F82F86918',
                'name' => 'Richard Nixon Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'slug' => 'roast-masters',
                'guid' => 'E085C3A1-5B0D-4322-8E3E-618BB4AEFAF9',
                'name' => 'Roast Masters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'slug' => 'robert-de-niro-impersonators',
                'guid' => '78FE8E71-D548-48D2-AE97-55161B4CF39F',
                'name' => 'Robert De Niro Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'slug' => 'robin-williams-impersonators',
                'guid' => 'F66DAB9B-2847-44EA-8586-8A613F30C1D3',
                'name' => 'Robin Williams Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'slug' => 'rock-acoustic-guitar',
                'guid' => '7CBFAD72-D759-489C-89EA-11C077C75C71',
                'name' => 'Rock Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'slug' => 'rock-and-pop-bands',
                'guid' => '890C6510-9A7A-4C25-AB28-085AFDC4E073',
                'name' => 'Rock and Pop Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'slug' => 'rock-bands',
                'guid' => '4F6F9520-67A7-476F-AA78-7608A42F6CFF',
                'name' => 'Rock Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'slug' => 'rock-dueling-pianos',
                'guid' => '392B6D44-151E-4201-A555-6751AC0248D4',
                'name' => 'Rock Dueling Pianos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'slug' => 'rock-duos',
                'guid' => '3EBAED31-E840-4ED5-AB09-A84D50F20B63',
                'name' => 'Rock Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'slug' => 'rock-guitar',
                'guid' => 'BB59B776-DEB1-4853-86A2-9C27D158990C',
                'name' => 'Rock Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'slug' => 'rock-piano',
                'guid' => '0BDE2FB2-5D09-4AA4-A06E-9552293D28D8',
                'name' => 'Rock Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'slug' => 'rock-pop-ensembles',
                'guid' => '24279A24-1B5C-46BA-BE2D-7443584E6CF2',
                'name' => 'Rock/Pop Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'slug' => 'rock-singers',
                'guid' => '56F21170-24D1-47F7-8975-43BB80462D42',
                'name' => 'Rock Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'slug' => 'rock-trios',
                'guid' => '270AA1A8-2BE4-4144-AEA4-BD4355B5C820',
                'name' => 'Rock Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'slug' => 'rockabilly-bands',
                'guid' => '8090CBB7-B58E-4DC7-9707-3A9BA8B35FB9',
                'name' => 'Rockabilly Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'slug' => 'rod-stewart-impersonators',
                'guid' => '058A22B9-C4E0-4B3B-94ED-591D6C2F6B0A',
                'name' => 'Rod Stewart Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'slug' => 'rodney-dangerfield-impersonators',
                'guid' => 'F1E0B1B5-F6B1-4DC4-B6BA-FB5AAB426387',
                'name' => 'Rodney Dangerfield Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'slug' => 'rolling-stones-tribute-bands',
                'guid' => '195CE4F0-5BE5-4F48-8FA5-C276F0D1F4DB',
                'name' => 'Rolling Stones Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'slug' => 'rolls-royce-car-rentals',
                'guid' => '2E6C6BD6-2497-4EC2-A390-2CF246A43006',
                'name' => 'Rolls Royce Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'slug' => 'roots-bands',
                'guid' => '2B16636D-0007-4740-810F-BF16FB5276E7',
                'name' => 'Roots Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'slug' => 'roy-orbison-tribute-acts',
                'guid' => '5F52C5BD-CE2B-4479-85B9-7170BA4A5C1E',
                'name' => 'Roy Orbison Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'slug' => 'rush-tribute-bands',
                'guid' => '0B5598FA-F227-41B0-B279-8C642810E458',
                'name' => 'Rush Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'slug' => 'russian-bands',
                'guid' => '47570601-00B4-47AD-ADFC-A66D1DDA12C9',
                'name' => 'Russian Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'slug' => 'russian-dancers',
                'guid' => '65448F94-7632-477F-B0DF-CAE3B5496C31',
                'name' => 'Russian Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'slug' => 'russian-entertainment',
                'guid' => '35AE49DD-3533-457C-B7CC-A66475B3D0B4',
                'name' => 'Russian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'slug' => 'saloon-girl-dancers',
                'guid' => '76388D41-567F-4A49-9417-62AA754C9391',
                'name' => 'Saloon Girl Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'slug' => 'saloon-girls',
                'guid' => '73FD64E6-11F9-4220-BB9B-9E9602213675',
                'name' => 'Saloon Girls',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'slug' => 'salsa-bands',
                'guid' => 'F822F5E7-BBC1-4F7E-97E2-D58C386A59B5',
                'name' => 'Salsa Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'slug' => 'salsa-dancers',
                'guid' => '9EF15461-9400-41B1-9D02-47E2CD8807B4',
                'name' => 'Salsa Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'slug' => 'samba-bands',
                'guid' => 'D5AE57B5-99B7-4367-B826-28B57807ADD4',
                'name' => 'Samba Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'slug' => 'sammy-davis-jr-tribute-acts',
                'guid' => 'C7A0C740-1F0B-4B0E-9413-848433762FBA',
                'name' => 'Sammy Davis Jr. Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'slug' => 'sandra-bullock-impersonators',
                'guid' => '26FBFC68-D857-4969-9FD2-11A8A7B007FC',
                'name' => 'Sandra Bullock Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'slug' => 'santa-claus',
                'guid' => '417503DB-5F5D-4F16-A9EF-016A6ADAA726',
                'name' => 'Santa Claus',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'slug' => 'santana-tribute-bands',
                'guid' => 'D3A5014F-B99E-41BD-BD07-5E136984C5F0',
                'name' => 'Santana Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'slug' => 'sarah-palin-impersonators',
                'guid' => '38693262-68C4-4B31-8278-64C185E377D2',
                'name' => 'Sarah Palin Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'slug' => 'saxophone',
                'guid' => '02CEC1A4-EF4E-448E-B26C-F790CE298827',
                'name' => 'Saxophone',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'slug' => 'scandinavian-entertainment',
                'guid' => 'D993FC07-5751-4DA7-B767-C73FAD302E1D',
                'name' => 'Scandinavian Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'slug' => 'scavenger-hunts',
                'guid' => 'E45B80B4-6BD9-4A5F-A561-C78EB07B7005',
                'name' => 'Scavenger Hunts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'slug' => 'scorpions-tribute-bands',
                'guid' => 'D7A41BAC-BB94-469C-A788-6CFA3F541BD7',
                'name' => 'Scorpions Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'slug' => 'sean-connery-impersonators',
                'guid' => '2F35E7ED-9721-46B8-85F7-685AB949940B',
                'name' => 'Sean Connery Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'slug' => 'selena-impersonators',
                'guid' => 'D72175B2-F0DF-459C-840D-F170BF7FFBDE',
                'name' => 'Selena Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'slug' => 'servers',
                'guid' => 'CECD84D5-2038-47A7-A603-F0850F0BE2FB',
                'name' => 'Servers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'slug' => 'set-designers',
                'guid' => 'F025E1B6-9688-4D19-896C-973392446307',
                'name' => 'Set Designers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'slug' => 'shakira-impersonators',
                'guid' => '35B59538-AE7E-41B7-898F-C0DCFEFABC79',
                'name' => 'Shakira Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'slug' => 'shania-twain-impersonators',
                'guid' => '0BB6D6FD-FBB6-4691-A8E9-1A01AE0A0D7E',
                'name' => 'Shania Twain Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'slug' => 'short-form-videographers',
                'guid' => 'E1059245-F45A-4160-85E2-B1EFA0190C66',
                'name' => 'Short Form Videographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'slug' => 'show-bands',
                'guid' => 'AE2C1350-77EF-435B-9C07-15760533D942',
                'name' => 'Show Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'slug' => 'sideshows',
                'guid' => '52E855C1-4748-4CA0-9350-40EF173A5A5A',
                'name' => 'Sideshows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'slug' => 'silhouette-artists',
                'guid' => '7C1BEAFB-4C3D-42E9-85BC-DE2CC0E8B9E5',
                'name' => 'Silhouette Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'slug' => 'singers',
                'guid' => '2CE1F0A4-E790-474A-9AF7-13541E5790DC',
                'name' => 'Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'slug' => 'singers-songwriters',
                'guid' => '393BA8F5-1BA2-47AF-BE0D-1C9D5A3B68E9',
                'name' => 'Singers/Songwriters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'slug' => 'singing-groups',
                'guid' => '99C03239-4F70-4E92-BE64-2198E52B5FBD',
                'name' => 'Singing Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'slug' => 'singing-guitarists',
                'guid' => '58BDC844-9ED0-442F-9122-13E72C36B63B',
                'name' => 'Singing Guitarists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'slug' => 'singing-pianists',
                'guid' => '54EA3BED-22FC-491E-A8F6-B11C71E6875B',
                'name' => 'Singing Pianists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'slug' => 'singing-telegrams',
                'guid' => '46998C36-4852-4AA8-97DC-B55CB36A8369',
                'name' => 'Singing Telegrams',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'slug' => 'sitar-players',
                'guid' => '1DBD79C8-2650-43E8-A5AD-493F00386CD7',
                'name' => 'Sitar Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'slug' => 'ska-bands',
                'guid' => '66E19315-72F3-4230-A09E-473310D03013',
                'name' => 'Ska Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'slug' => 'smooth-jazz-bands',
                'guid' => '1F2F14A2-83CF-49A0-9714-595898C4832C',
                'name' => 'Smooth Jazz Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'slug' => 'smooth-jazz-duos',
                'guid' => '8DD5AA86-2020-4352-815A-302DF7B42783',
                'name' => 'Smooth Jazz Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'slug' => 'smooth-jazz-musicians',
                'guid' => 'FE91942D-D17C-4F00-BFB8-0DC6895345A9',
                'name' => 'Smooth Jazz Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'slug' => 'smooth-jazz-singers',
                'guid' => 'A9455833-0220-4D0A-914E-98BD24BE73C0',
                'name' => 'Smooth Jazz Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'slug' => 'smooth-jazz-trios',
                'guid' => 'EC5D4D49-D5A2-4AE9-899F-F9BEC4021BD3',
                'name' => 'Smooth Jazz Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'slug' => 'snake-charmers',
                'guid' => '9300111F-81F8-4F79-A5B7-FD63CBC08E2A',
                'name' => 'Snake Charmers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'slug' => 'snake-shows',
                'guid' => '3CEBBE53-65C3-4C22-8598-D67A22B71A1D',
                'name' => 'Snake Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'slug' => 'soca-bands',
                'guid' => 'ED15ED52-5657-40E6-AEDF-E43CAB069A4D',
                'name' => 'Soca Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'slug' => 'solo-singers',
                'guid' => '3C154AEE-E2B4-4C77-9973-BB8403C204DC',
                'name' => 'Solo Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'slug' => 'sophia-loren-impersonators',
                'guid' => 'A678D488-265E-4BC4-BDF8-52A5179D680E',
                'name' => 'Sophia Loren Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'slug' => 'soul-bands',
                'guid' => '96DCD93D-25E2-4F21-A0FC-D0829666C0B6',
                'name' => 'Soul Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'slug' => 'soul-singers',
                'guid' => 'B8DD63B4-21CA-48F9-B7E1-81C3CABCDD0D',
                'name' => 'Soul Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'slug' => 'sound-a-likes',
                'guid' => '75F71992-62CC-42A0-B357-A5F72EEEBEC4',
                'name' => 'Sound-a-likes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'slug' => 'sound-engineers',
                'guid' => 'BF997FC3-4477-4B47-826C-0C70F93DBB09',
                'name' => 'Sound Engineers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'slug' => 'soundtrack-composers',
                'guid' => '001FBC6E-70F7-4B21-B7B2-4C56B8D753EE',
                'name' => 'Soundtrack Composers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'slug' => 'southern-gospel-groups',
                'guid' => 'D3B637F3-FFA7-4B2A-9F1D-BA1BB32D4F65',
                'name' => 'Southern Gospel Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'slug' => 'southern-rock-bands',
                'guid' => '970D3BB1-54D7-4FA2-974D-9FC8D5CA2D10',
                'name' => 'Southern Rock Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'slug' => 'spanish-djs',
                'guid' => '18789958-6AE0-462B-83C8-D7B94F5B56FD',
                'name' => 'Spanish DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'slug' => 'spanish-entertainment',
                'guid' => 'A4EEBDED-979D-4C5E-BA47-2C6D589B5925',
                'name' => 'Spanish Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'slug' => 'speakers',
                'guid' => 'F00F7D51-21F3-4E84-81B9-74BF77CAA733',
                'name' => 'Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'slug' => 'specialty-acts',
                'guid' => 'E146F6DA-487A-42DC-984A-15A416E2FE1F',
                'name' => 'Specialty Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'slug' => 'specialty-bands',
                'guid' => '2F3ECA32-9DF9-4ACB-8416-C54F8BBB19BB',
                'name' => 'Specialty Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'slug' => 'specialty-ensembles',
                'guid' => '5CAC579E-8884-4243-951C-38859A809067',
                'name' => 'Specialty Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'slug' => 'specialty-rentals',
                'guid' => '7AD2A90B-4829-400E-84B6-F5B1E0A41EA6',
                'name' => 'Specialty Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'slug' => 'spoken-word-artists',
                'guid' => 'F0B8022F-8558-46DB-A0B6-C6D6FF7A0E92',
                'name' => 'Spoken Word Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'slug' => 'sports-impersonators',
                'guid' => '036390B8-AD11-4284-8632-78B6EF828B06',
                'name' => 'Sports Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'slug' => 'sports-speakers',
                'guid' => '3D8B843D-C29F-412E-A8B1-213B598ED455',
                'name' => 'Sports Speakers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'slug' => 'square-dance-callers',
                'guid' => 'F760C0E9-B549-4E7A-A7F9-5C89A1839B22',
                'name' => 'Square Dance Callers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'slug' => 'square-dancers',
                'guid' => '0339661E-BC4F-4753-AB8B-0F35DFAC3635',
                'name' => 'Square Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'slug' => 'stage-hypnotists',
                'guid' => '8EB0EBCF-F784-4E78-97C7-83714D786BAB',
                'name' => 'Stage Hypnotists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'slug' => 'stand-up-comedians',
                'guid' => '37A7AE84-4BEF-4F22-BC47-9FC36D46A3D1',
                'name' => 'Stand Up Comedians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'slug' => 'steel-drum-bands',
                'guid' => '205C1FA9-2773-4B97-A3EB-3B694815747D',
                'name' => 'Steel Drum Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'slug' => 'steel-drum-players',
                'guid' => '2D3604ED-B56D-4BDC-8FCB-24CDE23F027A',
                'name' => 'Steel Drum Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'slug' => 'steel-drummers',
                'guid' => 'B43FAC50-2523-4E8F-BCB4-95B300EC8154',
                'name' => 'Steel Drummers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'slug' => 'steely-dan-tribute-bands',
                'guid' => '2CF1AA4B-388C-4FF9-AACF-B28F73A69BE3',
                'name' => 'Steely Dan Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'slug' => 'stevie-nicks-tribute-acts',
                'guid' => 'E4672A85-AE0B-4EE0-A19C-FAD3A064F822',
                'name' => 'Stevie Nicks Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'slug' => 'stevie-wonder-tribute-acts',
                'guid' => 'D1868A74-6499-4777-9DB9-C25EAF8A0EB8',
                'name' => 'Stevie Wonder Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'slug' => 'stilt-walkers',
                'guid' => '3BC0DF7E-9A5E-4EF7-A84D-500B0A2E2B1C',
                'name' => 'Stilt Walkers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'slug' => 'story-tellers',
                'guid' => '88726F63-5772-4F4E-81A7-058C9A2A8A54',
                'name' => 'Story Tellers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'slug' => 'storytellers',
                'guid' => '928CAA32-387F-41C9-833D-BB76BF57D7AE',
                'name' => 'Storytellers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'slug' => 'street-magicians',
                'guid' => '1417EDC8-22F8-4418-BB24-CC07A49C3FE0',
                'name' => 'Street Magicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'slug' => 'stretch-limousines',
                'guid' => '1C462937-E3D6-4199-83B2-0577DCAB457E',
                'name' => 'Stretch Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'slug' => 'string-quartets',
                'guid' => 'C9155403-A58A-4257-8B47-886619426C8D',
                'name' => 'String Quartets',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'slug' => 'string-trios',
                'guid' => '9332F47B-5ACE-4B01-8F0D-D1F347483602',
                'name' => 'String Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'slug' => 'strolling-magic',
                'guid' => 'E9E12063-FBDF-4DF1-9041-0D570563CD60',
                'name' => 'Strolling Magic',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'slug' => 'strolling-tables',
                'guid' => 'C8E3E775-D3A1-4F78-B4EC-BAAB4AD2E065',
                'name' => 'Strolling Tables',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'slug' => 'strolling-violinists',
                'guid' => '58B3694B-039E-4A12-BD55-5ABA3B3588C6',
                'name' => 'Strolling Violinists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'slug' => 'stunt-magicians',
                'guid' => '506512A9-70A9-47FA-B924-5ED0C8C1B6A9',
                'name' => 'Stunt Magicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'slug' => 'stunt-performers',
                'guid' => '0CC37EE7-5C83-4916-8E6F-979ED6B0D23A',
                'name' => 'Stunt Performers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'slug' => 'stuntman',
                'guid' => '1999FD4C-2881-4259-9A3B-4867432D4614',
                'name' => 'Stuntman',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'slug' => 'styx-tribute-bands',
                'guid' => 'C4367133-A8CA-409C-A77F-04F8B37E5C64',
                'name' => 'Styx Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'slug' => 'super-hero-parties',
                'guid' => 'A5BD79B2-6BF6-46F1-BF84-BEEA45AE1493',
                'name' => 'Super Hero Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'slug' => 'supertramp-tribute-bands',
                'guid' => 'B0DC03DD-17F2-4BDC-9854-AEB6A1C5E7A3',
                'name' => 'Supertramp Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'slug' => 'supremes-tribute-groups',
                'guid' => '5406C825-9DAB-4853-942B-1F1EC7E0C4FC',
                'name' => 'Supremes Tribute Groups',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'slug' => 'surf-bands',
                'guid' => '9A829582-7F1B-4666-B2B8-93A00AB84C17',
                'name' => 'Surf Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'slug' => 'suv-limousines',
                'guid' => '66C8986F-3418-4284-A462-4D85E07904AC',
                'name' => 'SUV Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'slug' => 'sweet-16-djs',
                'guid' => 'CF9FFF60-815E-4092-B69A-A576BB80F59E',
                'name' => 'Sweet 16 DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'slug' => 'swing-bands',
                'guid' => 'D6956173-A2FF-40DE-8F71-DE7BD28CBBAD',
                'name' => 'Swing Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'slug' => 'swing-dancers',
                'guid' => '4D885E3F-BB55-4203-BADB-5117F137F7D7',
                'name' => 'Swing Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'slug' => 'swing-duos',
                'guid' => '0AC96CAD-0D1F-4DC9-814A-2B1BA2D59DB4',
                'name' => 'Swing Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'slug' => 'swing-piano',
                'guid' => '0BCE1386-5DAF-463B-B164-D42B6D5156CD',
                'name' => 'Swing Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'slug' => 'swing-singers',
                'guid' => 'B9D2AB3D-7731-4F72-8FA7-3D8B691CA2A1',
                'name' => 'Swing Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'slug' => 'swing-trios',
                'guid' => '3430EED5-87A4-4B5E-AFB2-874D8CF69236',
                'name' => 'Swing Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'slug' => 'sword-swallowers',
                'guid' => '1C6E0D04-FF5A-4CF1-860A-6F4E48EF48F7',
                'name' => 'Sword Swallowers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'slug' => 'sylvester-stallone-impersonators',
                'guid' => 'B3702404-D740-482C-8804-AF1269CC0179',
                'name' => 'Sylvester Stallone Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'slug' => 'tables-and-chairs',
                'guid' => '3D54DE8E-DF27-4CB0-AFBC-EDC93B68AA67',
                'name' => 'Tables and Chairs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'slug' => 'tango-bands',
                'guid' => '078292BE-DA99-484E-9496-812C80E6B04D',
                'name' => 'Tango Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'slug' => 'tango-dancers',
                'guid' => '8C954640-FD87-4B82-839C-D3FAC820A7DF',
                'name' => 'Tango Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'slug' => 'tango-piano',
                'guid' => 'BD4AA9D2-6666-4206-BCBB-EDDC839CBAB0',
                'name' => 'Tango Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'slug' => 'tango-violin',
                'guid' => '9AAA3A01-987F-427A-B120-AF00E4ADD140',
                'name' => 'Tango Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'slug' => 'tap-dancers',
                'guid' => '39B6E93B-1D0A-448C-88E5-6A11C0D4C4A9',
                'name' => 'Tap Dancers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'slug' => 'tarot-card-readers',
                'guid' => '30B61A80-A38E-4726-9F82-209662F447B6',
                'name' => 'Tarot Card Readers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'slug' => 'team-building',
                'guid' => 'CABA3F00-35FA-4651-9468-40793B7D78CD',
                'name' => 'Team Building',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'slug' => 'techno-artists',
                'guid' => '3D7C825E-8CA5-4E6C-BEAD-931D03125067',
                'name' => 'Techno Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'slug' => 'techno-bands',
                'guid' => '1F9E3E45-C6D1-4EA0-82BB-324830CB2FB9',
                'name' => 'Techno Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'slug' => 'temporary-tattoos',
                'guid' => '1420A1A6-423D-4CE0-BBB1-942D5D65FDED',
                'name' => 'Temporary Tattoos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'slug' => 'tents',
                'guid' => 'D2E6178E-000E-4E02-9DE9-7B5742FD261E',
                'name' => 'Tents',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'slug' => 'the-cure-tribute-bands',
                'guid' => 'AD17A308-9F75-4967-9B68-4FE193509CD7',
                'name' => 'The Cure Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'slug' => 'theme-parties',
                'guid' => '93238D85-F534-4704-AF61-9D55D8FC0D85',
                'name' => 'Theme Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'slug' => 'tightrope-walkers',
                'guid' => '80A2FD10-1B6D-4848-B0CF-3BA46806A755',
                'name' => 'Tightrope Walkers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'slug' => 'tim-mcgraw-tribute-acts',
                'guid' => '69F5FE08-7408-48EC-A614-74EDA0F493A0',
                'name' => 'Tim McGraw Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'slug' => 'tim-mcgraw-tribute-bands',
                'guid' => 'F32C3453-AAD6-40B0-9506-E22185A0AA9B',
                'name' => 'Tim McGraw Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'slug' => 'tina-turner-tribute-acts',
                'guid' => '2BD5C008-BE5C-4583-8FF2-3FFD0708729F',
                'name' => 'Tina Turner Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'slug' => 'toastmasters',
                'guid' => '6CAE0522-7B2E-43CE-ABEF-82060AD5BB50',
                'name' => 'Toastmasters',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'slug' => 'toby-keith-tribute-acts',
                'guid' => 'EDB448E6-5723-4C3B-9401-D9A8C71868C9',
                'name' => 'Toby Keith Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'slug' => 'tom-cruise-impersonators',
                'guid' => '2FD457DD-1AD2-4DAB-ADE5-562915A02935',
                'name' => 'Tom Cruise Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'slug' => 'tom-jones-tribute-acts',
                'guid' => '56E17E6B-B4D3-4377-9C47-AEAE0C51B539',
                'name' => 'Tom Jones Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'slug' => 'tom-petty-tribute-acts',
                'guid' => 'E83F02E1-F37C-4CB7-8559-60DF52254D3C',
                'name' => 'Tom Petty Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'slug' => 'tony-bennett-tribute-acts',
                'guid' => '6B720643-E737-4057-B53F-B315204C3E92',
                'name' => 'Tony Bennett Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'slug' => 'tony-soprano-impersonators',
                'guid' => '951C17F3-6B00-4B4D-9C08-58213F44D252',
                'name' => 'Tony Soprano Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'slug' => 'top-40-acoustic-guitar',
                'guid' => 'E40E7268-447A-4140-8BBE-E676F824CBE0',
                'name' => 'Top 40 Acoustic Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'slug' => 'top-40-bands',
                'guid' => 'AE511A3C-BBC2-40B2-89CD-9AEE8643BABA',
                'name' => 'Top 40 Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'slug' => 'top-40-duos',
                'guid' => '08D1FFCB-80CA-48AC-90D0-889BC9AAD663',
                'name' => 'Top 40 Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'slug' => 'top-40-guitar',
                'guid' => '58399122-A0F2-4258-892F-5AAFC2378DB5',
                'name' => 'Top 40 Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'slug' => 'top-40-piano',
                'guid' => '10A421BC-BA37-409B-BD3F-54A2E0DE6B75',
                'name' => 'Top 40 Piano',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'slug' => 'top-40-singers',
                'guid' => 'F904BB1A-DB25-45E6-90C1-41C712A75654',
                'name' => 'Top 40 Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'slug' => 'top-40-trios',
                'guid' => 'C8F63CFE-3808-41FE-887C-1A6E1569BE03',
                'name' => 'Top 40 Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'slug' => 'town-car-rentals',
                'guid' => '6412F208-E2C4-4D22-95BA-2A18ABA69067',
                'name' => 'Town Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'slug' => 'trace-adkins-tribute-acts',
                'guid' => '84C8F86B-E380-48AD-B746-0A23DDFE7EAF',
                'name' => 'Trace Adkins Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'slug' => 'trackless-trains',
                'guid' => '6DA05621-2BF6-4F03-9593-E0526AC15F3A',
                'name' => 'Trackless Trains',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'slug' => 'trade-show-magic',
                'guid' => '41F2941C-BA25-4ACC-825E-5ED231D0DFEC',
                'name' => 'Trade Show Magic',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'slug' => 'traditional-photographers',
                'guid' => 'CECFDE12-DD03-4234-B914-276E319AFAA9',
                'name' => 'Traditional Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'slug' => 'transportation',
                'guid' => '476338C9-D858-45EA-90A8-F433FA7C0857',
                'name' => 'Transportation',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'slug' => 'trapeze-artists',
                'guid' => '2DE0ABE4-2246-414A-A0DF-9E2C573EADC3',
                'name' => 'Trapeze Artists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'slug' => 'traveling-circus',
                'guid' => 'BBBA5A76-9FE0-42D0-9CF2-C971A96B0EBE',
                'name' => 'Traveling Circus',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'slug' => 'tribute-acts',
                'guid' => '429430C5-DBD1-41CD-80C9-C8FDF0B034D3',
                'name' => 'Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'slug' => 'tribute-bands',
                'guid' => '38F981C1-D4AC-437F-A415-4F8A8DF8F201',
                'name' => 'Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'slug' => 'tribute-singers',
                'guid' => '26797433-3182-4D81-A14B-2888AE5B33F8',
                'name' => 'Tribute Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'slug' => 'trick-horse',
                'guid' => '4D8729B8-D360-44FF-8245-4B7AD1BDB982',
                'name' => 'Trick Horse',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'slug' => 'trick-riding',
                'guid' => '14FF768D-CC1B-48D8-9AC3-39F04FB585FC',
                'name' => 'Trick Riding',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'slug' => 'trick-roping',
                'guid' => '557A8718-3C70-4B36-A0C7-CABE714F157B',
                'name' => 'Trick Roping',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'slug' => 'trombone-players',
                'guid' => 'C3A23B22-840E-4171-9B54-3D5DF205B87C',
                'name' => 'Trombone Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'slug' => 'trumpet-players',
                'guid' => '2495A86D-AC96-4F46-91BB-8E5BF6CC2138',
                'name' => 'Trumpet Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'slug' => 'tuxedos-and-suits',
                'guid' => 'C78D0EDE-4804-4ECC-B60C-40602C785672',
                'name' => 'Tuxedos and Suits',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'slug' => 'u2-tribute-bands',
                'guid' => '21E1CD88-FFEA-4F51-998D-9DE2A8986F5A',
                'name' => 'U2 Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'slug' => 'ukulele',
                'guid' => 'E6AC920F-E745-49CF-9C31-7F649F0DFFCF',
                'name' => 'Ukulele',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'slug' => 'ukulele-players',
                'guid' => '9A3CB387-F99E-436C-9C96-0AEC798A4530',
                'name' => 'Ukulele Players',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'slug' => 'unicyclists',
                'guid' => 'F7E4D144-F946-477F-AA0E-D3B4A1970BED',
                'name' => 'Unicyclists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'slug' => 'utility-staff',
                'guid' => 'B0436126-4CAE-4623-B9EC-9BF0A2EDA973',
                'name' => 'Utility Staff',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'slug' => 'van-halen-tribute-bands',
                'guid' => '294A29FA-C229-47C5-B81A-81C8076A4A06',
                'name' => 'Van Halen Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'slug' => 'variety-acts',
                'guid' => '052B5DD9-2630-4D7A-9D05-41FC68D2CFF3',
                'name' => 'Variety Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'slug' => 'variety-bands',
                'guid' => '73FA8F91-E186-420A-B2DF-5F88488DFBDB',
                'name' => 'Variety Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'slug' => 'variety-duos',
                'guid' => 'FFFBDB09-9241-4F85-8EB0-5510E47D7F49',
                'name' => 'Variety Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'slug' => 'variety-singers',
                'guid' => '0CF886F3-E401-443E-9CF9-395FB3D99DE6',
                'name' => 'Variety Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'slug' => 'variety-trios',
                'guid' => '53E8886C-40F3-4159-B582-EE65B89C47EF',
                'name' => 'Variety Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'slug' => 'ventriloquists',
                'guid' => 'C3650C7C-D135-4AB8-AE68-337E147A4B0A',
                'name' => 'Ventriloquists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'slug' => 'venues',
                'guid' => 'CDA37F9D-F0B5-466E-8F5A-55A43580E88A',
                'name' => 'Venues',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'slug' => 'video-djs',
                'guid' => '90408F93-7FBB-4C06-B6E8-695CD55D6AA0',
                'name' => 'Video DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'slug' => 'video-game-parties',
                'guid' => '15371A3E-4D72-45CE-83C9-9DCCFE7864C5',
                'name' => 'Video Game Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'slug' => 'video-journalists',
                'guid' => 'E8D9CA9C-7FB0-45BA-A519-E50C3A322820',
                'name' => 'Video Journalists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'slug' => 'video-services',
                'guid' => '1C225B33-D99A-4694-937A-DC455D26B540',
                'name' => 'Video Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'slug' => 'videographer-services',
                'guid' => '70CE8C9B-A198-40CF-9CBF-018774498910',
                'name' => 'Videographer Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'slug' => 'videographers',
                'guid' => '1E2CB194-866D-49F8-AE78-132FDF7C0A98',
                'name' => 'Videographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'slug' => 'vintage-car-rentals',
                'guid' => '2A2C4925-BC1A-41BF-B12D-B7EF4A7CD36D',
                'name' => 'Vintage Car Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'slug' => 'viola',
                'guid' => 'E26B5DE8-CFA2-430A-A2FF-CA5D59024BDA',
                'name' => 'Viola',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'slug' => 'violin',
                'guid' => '18F82607-2D4A-48FF-BB03-66802AEE4D72',
                'name' => 'Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'slug' => 'voice-actors',
                'guid' => '0A98F178-5FE0-4DCF-BB1A-D0B40F4D0A0D',
                'name' => 'Voice Actors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'slug' => 'wait-staff',
                'guid' => '3F39E420-98D4-4DAB-ACBC-76030A692591',
                'name' => 'Wait Staff',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'slug' => 'waylon-jennings-tribute-acts',
                'guid' => '90DA39E8-C891-46E5-A09E-070B22D6888A',
                'name' => 'Waylon Jennings Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'slug' => 'wedding-bands',
                'guid' => '05F8AAEC-1103-46DF-B3F6-B770431F59BE',
                'name' => 'Wedding Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'slug' => 'wedding-buses',
                'guid' => 'EBFCDC79-C70B-4894-B1FA-2E11F54C023D',
                'name' => 'Wedding Buses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'slug' => 'wedding-cakes',
                'guid' => '0AC854E4-02A4-4FCB-94D6-CAB31DC383C0',
                'name' => 'Wedding Cakes',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'slug' => 'wedding-convertibles',
                'guid' => '64B82857-4B15-4AAC-921B-A27AA3E1ABE9',
                'name' => 'Wedding Convertibles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'slug' => 'wedding-coordinators',
                'guid' => 'F4ECADCA-F4FA-4C5E-809D-BDCF1AE8016F',
                'name' => 'Wedding Coordinators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'slug' => 'wedding-djs',
                'guid' => '56BA1A23-6D1D-4968-89C5-5576B7AFBB79',
                'name' => 'Wedding DJs',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'slug' => 'wedding-dresses',
                'guid' => 'A271065D-EB48-46E5-BAFE-EDD2D764F85B',
                'name' => 'Wedding Dresses',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'slug' => 'wedding-entertainment',
                'guid' => 'A3E358FD-E832-4E25-A560-A63E9101B62E',
                'name' => 'Wedding Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'slug' => 'wedding-fashion-consultants',
                'guid' => '49AAF93C-44BB-469B-8BCA-248B847E2D34',
                'name' => 'Wedding Fashion Consultants',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'slug' => 'wedding-favors',
                'guid' => '2AF1F13F-E2E9-4DF1-8A85-208B1C86A47F',
                'name' => 'Wedding Favors',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'slug' => 'wedding-florists',
                'guid' => '6F0F258D-BDC1-4C45-ADF4-FCFAF4794737',
                'name' => 'Wedding Florists',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'slug' => 'wedding-invitations',
                'guid' => '82FC4A76-5F45-4B2A-AC9E-F72EA76D58BC',
                'name' => 'Wedding Invitations',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'slug' => 'wedding-limousines',
                'guid' => '6FB290E2-CD2E-4F58-9A5C-832765F2DE86',
                'name' => 'Wedding Limousines',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'slug' => 'wedding-ministers',
                'guid' => 'D3EEF180-20DC-4082-8E5D-A4055A87484B',
                'name' => 'Wedding Ministers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'slug' => 'wedding-officiants',
                'guid' => '0A9877AF-0BC3-43EA-85BD-86E66D61F2FB',
                'name' => 'Wedding Officiants',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'slug' => 'wedding-photographers',
                'guid' => 'D8E5B84D-F207-4FBC-BEDB-B41FB81C2F35',
                'name' => 'Wedding Photographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'slug' => 'wedding-planners',
                'guid' => '4326577F-C8E7-4D79-90FA-7127910D84FB',
                'name' => 'Wedding Planners',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'slug' => 'wedding-rabbis',
                'guid' => '11567AEB-AAE1-4B4D-A9C3-23B0A3528DD7',
                'name' => 'Wedding Rabbis',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'slug' => 'wedding-rentals',
                'guid' => '0E2253C7-CC54-4C78-BA34-42EDB6EE2048',
                'name' => 'Wedding Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'slug' => 'wedding-services',
                'guid' => '10074BFD-1D2B-4CB8-9D22-D9CD4FBD31DD',
                'name' => 'Wedding Services',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'slug' => 'wedding-singers',
                'guid' => 'FD2CE02C-7D06-4E71-9DB7-8F09B0E0EC6A',
                'name' => 'Wedding Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'slug' => 'wedding-tent-rentals',
                'guid' => '8F36479B-C8FF-4FCB-8497-0F09255D32EB',
                'name' => 'Wedding Tent Rentals',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'slug' => 'wedding-videographers',
                'guid' => 'A3BCF201-DCE0-406C-96D4-C365D5038CC9',
                'name' => 'Wedding Videographers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'slug' => 'western-bands',
                'guid' => '0501F1E4-764E-4601-8372-C23C39F840A5',
                'name' => 'Western Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'slug' => 'western-bartenders',
                'guid' => '35F0BF79-461C-4722-BFBD-FCF91906287D',
                'name' => 'Western Bartenders',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'slug' => 'western-cowboy-entertainment',
                'guid' => 'A28BAD65-6240-4C75-8CE3-36E56ACA4DB5',
                'name' => 'Western/Cowboy Entertainment',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'slug' => 'western-theme-parties',
                'guid' => '972D695D-1CB5-4EAB-B37E-3E093A0770F6',
                'name' => 'Western Theme Parties',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'slug' => 'whip-crackers',
                'guid' => '61953849-A36E-4810-BC6D-EE0C3EADDCAE',
                'name' => 'Whip Crackers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'slug' => 'whitney-houston-impersonators',
                'guid' => '2BCF0B36-E607-4FA9-9B7A-6E83B3D097FA',
                'name' => 'Whitney Houston Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'slug' => 'who-tribute-bands',
                'guid' => '8AB6D959-C885-4521-BAE6-12C504C97277',
                'name' => 'Who Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'slug' => 'whoopi-goldberg-impersonators',
                'guid' => 'ACA675C9-BA1F-4387-A3D9-A7780F3A18D2',
                'name' => 'Whoopi Goldberg Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'slug' => 'wild-west-shows',
                'guid' => 'F7AD7FC9-ACD5-4CE6-860C-6894DCCD804E',
                'name' => 'Wild West Shows',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'slug' => 'willie-nelson-tribute-acts',
                'guid' => '523546F4-BD11-496F-A309-90C3FD2BA1DA',
                'name' => 'Willie Nelson Tribute Acts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'slug' => 'wolfman-jack-impersonators',
                'guid' => 'C4C0A0FC-1773-4B3A-95F1-7FFD8C422D3B',
                'name' => 'Wolfman Jack Impersonators',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'slug' => 'woodwind-ensembles',
                'guid' => '62D7ACB4-DE24-4CB7-A6A4-5161FF5DE0CD',
                'name' => 'Woodwind Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'slug' => 'woodwind-musicians',
                'guid' => 'FAB593B9-96D1-4A54-95D4-44FB7F9FF177',
                'name' => 'Woodwind Musicians',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'slug' => 'world-and-cultural',
                'guid' => '0D7562B1-A3F1-415D-A1C0-722886750B39',
                'name' => 'World and Cultural',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'slug' => 'world-bands',
                'guid' => 'E0AA9C3C-E18B-439C-9923-F569B70E6B86',
                'name' => 'World Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'slug' => 'world-ensembles',
                'guid' => '300BDDB2-46CE-4C29-89B0-3C38B2E23274',
                'name' => 'World Ensembles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'slug' => 'world-music',
                'guid' => '118EA2BB-0373-43F5-8F49-CA595AD943C0',
                'name' => 'World Music',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'slug' => 'world-music-bands',
                'guid' => '631945B7-EDAB-438C-B245-DDDB59846C26',
                'name' => 'World Music Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'slug' => 'world-music-duos',
                'guid' => '8CDBC1FB-D9D4-49F4-92CE-6C3B159E3E6A',
                'name' => 'World Music Duos',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'slug' => 'world-music-guitar',
                'guid' => 'AB60C43E-C01F-478A-823A-82C9A9B4F8F0',
                'name' => 'World Music Guitar',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'slug' => 'world-music-singers',
                'guid' => '1B38E3DE-6B16-481F-9236-C30728D13A54',
                'name' => 'World Music Singers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'slug' => 'world-music-trios',
                'guid' => '32B33753-B79E-43B1-A620-0FC9E65DE8AC',
                'name' => 'World Music Trios',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'slug' => 'world-music-violin',
                'guid' => '539711D9-790D-48CA-A611-E13053B0649F',
                'name' => 'World Music Violin',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'slug' => 'world-regional',
                'guid' => '7BFA5442-0FD8-4B69-92C9-DC344349F3CE',
                'name' => 'World-Regional',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'slug' => 'world-styles',
                'guid' => 'B838B85F-2683-4862-8282-5C3D9D276F58',
                'name' => 'World Styles',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'slug' => 'yodelers',
                'guid' => 'CCCB85FC-2216-42DA-812B-D9ABDCEDCADB',
                'name' => 'Yodelers',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'slug' => 'yoyo-experts',
                'guid' => '74E15EE9-8395-4AF3-BED8-F06916917389',
                'name' => 'YoYo Experts',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'slug' => 'zydeco-bands',
                'guid' => '9A88D0F8-87CC-463A-9D3B-56F4DC5ABBA2',
                'name' => 'Zydeco Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'slug' => 'zz-top-tribute-bands',
                'guid' => '91E72D01-6C9A-4096-975F-5A4C36C5DE38',
                'name' => 'ZZ Top Tribute Bands',
                'order_num' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}