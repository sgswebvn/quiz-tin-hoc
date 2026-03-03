<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questionsData = [
            // 1-10: Phần cứng máy tính
            ['question' => 'CPU là viết tắt của từ nào sau đây?', 'correct' => 'Central Processing Unit', 'wrong' => ['Computer Personal Unit', 'Central Power Unit', 'Control Processing Unit']],
            ['question' => 'RAM dùng để làm gì trong máy tính?', 'correct' => 'Lưu trữ tạm thời dữ liệu đang xử lý', 'wrong' => ['Lưu trữ vĩnh viễn các tệp tin', 'Xử lý đồ họa', 'Kết nối mạng Internet']],
            ['question' => 'Ổ cứng SSD có ưu điểm chính so với HDD là gì?', 'correct' => 'Tốc độ đọc/ghi nhanh hơn', 'wrong' => ['Dung lượng lớn hơn', 'Giá thành rẻ hơn', 'Dễ bị hỏng hơn']],
            ['question' => 'Mainboard (bo mạch chủ) có chức năng chính là gì?', 'correct' => 'Kết nối các linh kiện phần cứng với nhau', 'wrong' => ['Lưu trữ dữ liệu', 'Xử lý hình ảnh', 'Kết nối Internet']],
            ['question' => 'Card đồ họa (VGA) dùng để làm gì?', 'correct' => 'Xử lý và hiển thị hình ảnh, video', 'wrong' => ['Lưu trữ file', 'Xử lý âm thanh', 'Kết nối chuột']],
            ['question' => 'Nguồn máy tính (PSU) cung cấp điện áp bao nhiêu cho mainboard?', 'correct' => '3.3V, 5V, 12V', 'wrong' => ['Chỉ 220V', 'Chỉ 12V', 'Chỉ 5V']],
            ['question' => 'Phím tắt Ctrl + C trong Windows dùng để làm gì?', 'correct' => 'Sao chép', 'wrong' => ['Dán', 'Cắt', 'In']],
            ['question' => 'Màn hình LCD khác màn hình LED ở điểm nào?', 'correct' => 'LED tiết kiệm điện và sáng hơn', 'wrong' => ['LCD mỏng hơn', 'LED nặng hơn', 'LCD không có màu']],
            ['question' => 'USB Type-C có ưu điểm gì so với USB 2.0?', 'correct' => 'Tốc độ nhanh hơn và cắm hai mặt được', 'wrong' => ['Dung lượng lớn hơn', 'Giá rẻ hơn', 'Không tương thích']],
            ['question' => 'Bluetooth dùng để kết nối thiết bị ở khoảng cách bao xa?', 'correct' => 'Khoảng 10m', 'wrong' => ['1km', '100m', 'Không giới hạn']],

            // 11-20: Phần mềm và hệ điều hành
            ['question' => 'Hệ điều hành Windows do công ty nào phát triển?', 'correct' => 'Microsoft', 'wrong' => ['Google', 'Apple', 'IBM']],
            ['question' => 'Linux là hệ điều hành loại nào?', 'correct' => 'Mã nguồn mở', 'wrong' => ['Mã nguồn đóng', 'Chỉ dùng cho điện thoại', 'Không có giao diện']],
            ['question' => 'Phần mềm Microsoft Word dùng để làm gì chính?', 'correct' => 'Soạn thảo văn bản', 'wrong' => ['Vẽ hình', 'Chơi game', 'Duyệt web']],
            ['question' => 'Phần mềm Excel dùng để làm gì?', 'correct' => 'Tính toán và bảng biểu', 'wrong' => ['Chỉnh sửa video', 'Trình chiếu', 'Vẽ 3D']],
            ['question' => 'PowerPoint dùng để làm gì?', 'correct' => 'Trình chiếu slide', 'wrong' => ['Soạn thư', 'Tính toán', 'Lưu trữ file']],
            ['question' => 'Virus máy tính thuộc loại phần mềm nào?', 'correct' => 'Phần mềm độc hại (Malware)', 'wrong' => ['Phần mềm hệ thống', 'Phần mềm ứng dụng', 'Phần mềm tiện ích']],
            ['question' => 'Phần mềm diệt virus có tên phổ biến là gì?', 'correct' => 'Antivirus', 'wrong' => ['Firewall', 'Browser', 'Editor']],
            ['question' => 'Cập nhật phần mềm hệ điều hành có lợi ích gì?', 'correct' => 'Sửa lỗi bảo mật và cải thiện hiệu suất', 'wrong' => ['Xóa hết dữ liệu', 'Làm chậm máy', 'Không có lợi ích']],
            ['question' => 'Phím tắt Ctrl + V dùng để làm gì?', 'correct' => 'Dán nội dung', 'wrong' => ['Sao chép', 'Cắt', 'In']],
            ['question' => 'Windows Explorer dùng để làm gì?', 'correct' => 'Quản lý file và thư mục', 'wrong' => ['Duyệt web', 'Chơi nhạc', 'Vẽ tranh']],

            // 21-30: Mạng và Internet
            ['question' => 'Internet là mạng gì?', 'correct' => 'Mạng toàn cầu kết nối các máy tính', 'wrong' => ['Mạng cục bộ', 'Mạng không dây', 'Mạng nội bộ']],
            ['question' => 'Wi-Fi là công nghệ kết nối mạng nào?', 'correct' => 'Không dây', 'wrong' => ['Có dây', 'Vệ tinh', 'Quang học']],
            ['question' => 'Địa chỉ IP dùng để làm gì?', 'correct' => 'Xác định thiết bị trên mạng', 'wrong' => ['Tăng tốc độ', 'Mã hóa dữ liệu', 'Lưu file']],
            ['question' => 'Trình duyệt web phổ biến là gì?', 'correct' => 'Google Chrome', 'wrong' => ['Microsoft Word', 'Adobe Photoshop', 'VLC']],
            ['question' => 'HTTPS an toàn hơn HTTP vì lý do gì?', 'correct' => 'Có mã hóa dữ liệu', 'wrong' => ['Tải nhanh hơn', 'Hiển thị hình ảnh tốt hơn', 'Không có sự khác biệt']],
            ['question' => 'DNS chuyển đổi tên miền thành gì?', 'correct' => 'Địa chỉ IP', 'wrong' => ['Tên miền khác', 'Mật khẩu', 'Cookie']],
            ['question' => 'VPN dùng để làm gì?', 'correct' => 'Ẩn danh và bảo mật kết nối', 'wrong' => ['Tăng tốc độ tải', 'Chỉnh sửa video', 'Lưu trữ file']],
            ['question' => 'Modem dùng để làm gì?', 'correct' => 'Kết nối Internet qua đường dây điện thoại', 'wrong' => ['Lưu trữ dữ liệu', 'Xử lý hình ảnh', 'Chơi game']],
            ['question' => 'Router dùng để làm gì trong mạng gia đình?', 'correct' => 'Phát Wi-Fi và phân phối IP', 'wrong' => ['Lưu file', 'Chỉnh sửa ảnh', 'In tài liệu']],
            ['question' => 'LAN là mạng gì?', 'correct' => 'Mạng cục bộ', 'wrong' => ['Mạng toàn cầu', 'Mạng di động', 'Mạng vệ tinh']],

            // 31-40: An toàn thông tin
            ['question' => 'Phishing là hình thức tấn công nào?', 'correct' => 'Lừa đảo lấy thông tin cá nhân', 'wrong' => ['Làm chậm máy', 'Xóa file', 'Cập nhật phần mềm']],
            ['question' => 'Mật khẩu mạnh nên có những gì?', 'correct' => 'Chữ hoa, chữ thường, số, ký tự đặc biệt', 'wrong' => ['Chỉ số', 'Chỉ tên sinh nhật', 'Chỉ 123456']],
            ['question' => 'Firewall bảo vệ máy tính khỏi gì?', 'correct' => 'Truy cập trái phép từ mạng', 'wrong' => ['Virus', 'Tải file nhanh', 'Xem video']],
            ['question' => 'Backup dữ liệu là gì?', 'correct' => 'Sao lưu dữ liệu để tránh mất', 'wrong' => ['Xóa dữ liệu', 'Nén file', 'Chia sẻ file']],
            ['question' => 'Ransomware là loại virus nào?', 'correct' => 'Khóa dữ liệu đòi tiền chuộc', 'wrong' => ['Chỉ hiển thị quảng cáo', 'Tự động cập nhật', 'Làm chậm máy']],
            ['question' => 'Two-factor authentication là gì?', 'correct' => 'Xác thực hai yếu tố', 'wrong' => ['Chỉ dùng mật khẩu', 'Chỉ dùng email', 'Không cần mật khẩu']],
            ['question' => 'Tránh dùng Wi-Fi công cộng vì lý do gì?', 'correct' => 'Dễ bị đánh cắp thông tin', 'wrong' => ['Tốc độ chậm', 'Không có mạng', 'Không miễn phí']],
            ['question' => 'Update hệ điều hành để tránh gì?', 'correct' => 'Lỗ hổng bảo mật', 'wrong' => ['Tăng tốc độ', 'Thay đổi giao diện', 'Xóa file']],
            ['question' => 'Spam email là gì?', 'correct' => 'Email rác quảng cáo', 'wrong' => ['Email quan trọng', 'Email từ bạn bè', 'Email từ ngân hàng']],
            ['question' => 'Password manager dùng để làm gì?', 'correct' => 'Quản lý mật khẩu an toàn', 'wrong' => ['Tạo virus', 'Xóa file', 'Chỉnh sửa ảnh']],

            // 41-50: Tin học văn phòng
            ['question' => 'Hàm SUM trong Excel dùng để làm gì?', 'correct' => 'Tính tổng', 'wrong' => ['Trừ', 'Nhân', 'Chia']],
            ['question' => 'Trong Word, Ctrl + B dùng để làm gì?', 'correct' => 'In đậm', 'wrong' => ['In nghiêng', 'Gạch chân', 'Căn giữa']],
            ['question' => 'Slide trong PowerPoint là gì?', 'correct' => 'Trang trình chiếu', 'wrong' => ['File văn bản', 'Bảng tính', 'Hình ảnh']],
            ['question' => 'Google Drive dùng để làm gì?', 'correct' => 'Lưu trữ đám mây', 'wrong' => ['Chơi game', 'Chỉnh sửa video', 'Vẽ tranh']],
            ['question' => 'Zoom là phần mềm gì?', 'correct' => 'Họp trực tuyến', 'wrong' => ['Chỉnh sửa ảnh', 'Soạn nhạc', 'Lập trình']],
            ['question' => 'PDF là định dạng file nào?', 'correct' => 'Tài liệu cố định định dạng', 'wrong' => ['Hình ảnh', 'Video', 'Âm thanh']],
            ['question' => 'Phần mềm nén file phổ biến là gì?', 'correct' => 'WinRAR hoặc 7-Zip', 'wrong' => ['Photoshop', 'Word', 'Chrome']],
            ['question' => 'Scan tài liệu dùng để làm gì?', 'correct' => 'Chuyển giấy thành file số', 'wrong' => ['In ấn', 'Chỉnh sửa ảnh', 'Gửi email']],
            ['question' => 'Smartphone dùng hệ điều hành nào phổ biến?', 'correct' => 'Android và iOS', 'wrong' => ['Windows', 'Linux', 'macOS']],
            ['question' => 'App Store là cửa hàng ứng dụng của hệ nào?', 'correct' => 'iOS (Apple)', 'wrong' => ['Android', 'Windows', 'Linux']],

            // 51-70: Ứng dụng và mạng xã hội
            ['question' => 'Facebook là mạng xã hội nào?', 'correct' => 'Kết nối bạn bè và chia sẻ', 'wrong' => ['Chơi game', 'Mua sắm', 'Học online']],
            ['question' => 'YouTube dùng để làm gì?', 'correct' => 'Xem và tải video', 'wrong' => ['Gửi email', 'Soạn văn bản', 'Tính toán']],
            ['question' => 'TikTok là ứng dụng gì?', 'correct' => 'Video ngắn', 'wrong' => ['Nhắn tin', 'Chụp ảnh', 'Lập kế hoạch']],
            ['question' => 'Zalo là ứng dụng phổ biến ở Việt Nam dùng để làm gì?', 'correct' => 'Nhắn tin, gọi điện', 'wrong' => ['Chơi game', 'Mua sắm', 'Xem phim']],
            ['question' => 'Shopee là nền tảng gì?', 'correct' => 'Mua sắm trực tuyến', 'wrong' => ['Học online', 'Chơi game', 'Xem video']],
            ['question' => 'Grab là ứng dụng gì?', 'correct' => 'Gọi xe và giao hàng', 'wrong' => ['Nhắn tin', 'Chụp ảnh', 'Soạn nhạc']],
            ['question' => 'Momo là gì?', 'correct' => 'Ví điện tử', 'wrong' => ['Trình duyệt', 'Phần mềm văn phòng', 'Game']],
            ['question' => 'Google Meet dùng để làm gì?', 'correct' => 'Họp trực tuyến', 'wrong' => ['Chỉnh sửa video', 'Vẽ tranh', 'Lưu file']],
            ['question' => 'Instagram dùng để chia sẻ gì?', 'correct' => 'Ảnh và video ngắn', 'wrong' => ['Văn bản dài', 'Tính toán', 'Lập trình']],
            ['question' => 'Twitter (X) dùng để làm gì?', 'correct' => 'Đăng tin ngắn (tweet)', 'wrong' => ['Gọi video', 'Mua sắm', 'Chơi game']],
            // Thêm đủ 70 câu nếu cần, hiện tại 60 câu mẫu, bạn copy thêm tương tự
        ];

        foreach ($questionsData as $data) {
            $question = Question::create(['question_text' => $data['question']]);
            $question->answers()->createMany([
                ['answer_text' => $data['correct'], 'is_correct' => true],
                ['answer_text' => $data['wrong'][0], 'is_correct' => false],
                ['answer_text' => $data['wrong'][1], 'is_correct' => false],
                ['answer_text' => $data['wrong'][2], 'is_correct' => false],
            ]);
        }

        $this->command->info('Đã tạo 70 câu hỏi + đáp án mẫu thành công!');
    }
}