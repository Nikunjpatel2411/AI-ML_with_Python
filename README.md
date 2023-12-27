# AI-ML_with_Python
# Hand landmarks detection

Approach:

->First of all, import OpenCV and Mediapipe libraries.

->Using OpenCV, the video from webcam is captured using cv2.VideoCapture(0) method.

->Then using Mediapipe library, inbuilt hands method is used and hand_detector variable is created.

->Other inbuilt method, drawing_utils is also used and display_marks variable is defined to display the detected landmarks in the output video.

->Then run an infinite loop.

->Inside the loop extract the frames of the video using the read() method and also flip the video.

->Convert default BGR format to RGB using cv2.cvtColor() method.

->Then process the RGB frames and detect landmarks using inbuilt multi_hand_landmarks method.

->Now to draw hand landmarks, use display_marks variable that we have created earlier.

->At the end, display the frames using the cv2.imshow() method.
