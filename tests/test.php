<?php

// public function Store(Request $request)
// {
//     $data = new Menu();
//     $data->name = $request->name;
//     $data->ingredients = $request->ingredients;
//     $data->price = $request->price;

//     $file = $request->file('photo');
//     if ($file) {
//         @unlink(public_path('upload/menu_images/' . $data->photo));
//         $filename = date('YmdHi') . $file->getClientOriginalName();
//         $file->move(public_path('upload/menu_images'), $filename);
//         $data['photo'] = $filename;
//     }
//     $data->save();
// }

// public function Update(Request $request)
//     {
//         $pid = $request->id;

//         Menu::findOrFail($pid)->update([
//             'name' => $request->name,
//             'ingredients' => $request->ingredients,
//             'price' => $request->price,
//             'photo' => $request->photo,
//         ]);
//     }

?>
