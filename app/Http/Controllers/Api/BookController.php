<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Tag(
    name: "Books",
    description: "API Katalog Buku"
)]
class BookController extends Controller
{
    private $books = [
        [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "author" => "Andrea Hirata",
            "publisher" => "Bentang",
            "year" => 2005
        ],
        [
            "id" => 2,
            "title" => "Bumi",
            "author" => "Tere Liye",
            "publisher" => "Gramedia",
            "year" => 2014
        ]
    ];

    #[OA\Get(
        path: "/api/v1/catalog/books",
        summary: "Get all books",
        tags: ["Books"],
        responses: [
            new OA\Response(
                response: 200,
                description: "Success"
            )
        ]
    )]
    public function index()
    {
        return response()->json($this->books);
    }

    #[OA\Get(
        path: "/api/v1/catalog/books/{id}",
        summary: "Get book by ID",
        tags: ["Books"],
        responses: [
            new OA\Response(
                response: 200,
                description: "Success"
            ),
            new OA\Response(
                response: 404,
                description: "Book not found"
            )
        ]
    )]
    public function show($id)
    {
        foreach ($this->books as $book) {
            if ($book['id'] == $id) {
                return response()->json($book);
            }
        }

        return response()->json([
            "message" => "Book not found"
        ], 404);
    }

    #[OA\Post(
        path: "/api/v1/catalog/books",
        summary: "Create book",
        tags: ["Books"],
        responses: [
            new OA\Response(
                response: 201,
                description: "Book created"
            )
        ]
    )]
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Book created successfully",
            "data" => $request->all()
        ], 201);
    }
}